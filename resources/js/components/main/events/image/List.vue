<template>
  <v-card v-if="isTrue">
    <v-card-title>
      <div class="text-center mt-4">
        <v-btn rounded color="primary" dark @click="add()">Add Image</v-btn>
        <v-btn rounded outlined color="orange" dark @click="back()">
          Back
        </v-btn>
      </div>

      <!--=========================================================================================
          SEARCH
      ==========================================================================================-->
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        label="Search"
        single-line
        hide-details
      ></v-text-field>

      <!--=========================================================================================
          MODAL
      ==========================================================================================-->
      <v-dialog v-model="dialog" class="text-center" max-width="500px">
        <v-card class="text-center pb-0">
          <v-card-text class="pb-0">
            <v-container>
              <v-row>
                <v-col cols="12" class="text-center mb-0">
                  <v-text-field
                    outlined
                    color="red"
                    v-model="key_word"
                    class="text--danger-3 mt-3 text-xs-center"
                    label="Ketik 'DELETE' untuk melanjutakan"
                  ></v-text-field>
                  <v-btn
                    sm
                    outlined
                    color="green darken-1"
                    text
                    @click="closeDialog"
                    >Cancel</v-btn
                  >
                  <v-btn
                    sm
                    outlined
                    color="red darken-1"
                    :loading="isRequest"
                    text
                    @click="deleteEventImage"
                    >Delete</v-btn
                  >
                </v-col>
              </v-row>
            </v-container>
          </v-card-text>
        </v-card>
      </v-dialog>
    </v-card-title>

    <!--=========================================================================================
        TABLE
    ==========================================================================================-->
    <v-data-table
      :headers="headers"
      :items="images"
      :search="search"
      :items-per-page="5"
      :footer-props="footerProps"
    >
      <template v-slot:item.image="{ item }">
        <div class="p-2">
          <v-img :src="item.image_link" height="50px" width="50px"></v-img>
        </div>
      </template>
      <template v-slot:item.action="{ item }">
        <v-icon color="red" small @click="openDialog(item)">mdi-delete</v-icon>
      </template>
      <template v-slot:no-data>
        <v-btn sm outlined color="indigo" style="border: 0"> No data </v-btn>
      </template>
    </v-data-table>
  </v-card>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  props: {
    event: {},
  },

  data() {
    return {
      isRequest: false,
      dialog: false,
      key_word: "",
      search: "",
      image: "",
      eventProp: this.event,

      isTrue: true,

      footerProps: { "items-per-page-options": [5, 10, 15] },
      headers: [
        { text: "Gambar", value: "image", sortable: false },
        {
          text: "Nama",
          align: "left",
          sortable: false,
          value: "name",
        },
        { text: "Actions", value: "action", sortable: false },
      ],
    };
  },

  computed: {
    ...mapGetters({
      images: "images",
    }),
  },

  mounted() {
    this.getEventImages();
  },

  methods: {
    getEventImages() {
      let self = this;
      if ((self.eventProp = undefined)) {
        self.back();
      } else {
        self.$store
          .dispatch("getEventImages", self.event.id)
          .then((response) => {});
      }
    },

    deleteEventImage() {
      let self = this;

      if (!self.isRequest && self.key_word == "DELETE") {
        self.isRequest = true;

        this.$store
          .dispatch("deleteEventImage", self.image.id)
          .then((response) => {
            self.key_word = "";
            self.isRequest = false;
            self.deleteCurrentImage();
            flash(response);
            self.closeDialog();
          })
          .catch((errors) => {
            self.key_word = "";
            self.isRequest = false;
            self.closeDialog();
          });
      }
    },

    deleteCurrentImage() {
      let self = this;
      let index = _.findIndex(self.images, function (image) {
        return image.id === self.image.id;
      });

      self.images.splice(index, 1);
    },

    openDialog(item) {
      this.image = item;
      this.dialog = true;
    },

    closeDialog() {
      this.key_word = "";
      this.dialog = false;
    },

    add() {
      this.$emit("addImage", "add");
    },

    back() {
      this.$emit("back");
    },
  },
};
</script>