<template>
  <v-card>
    <v-card-title>
      <div class="text-center mt-4">
        <v-btn rounded color="primary" dark @click="add()"
          >Create Laporan</v-btn
        >
      </div>
      <!--======================================================================================
          SEARCH 
      ==========================================================================================-->
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        label="Search"
        single-line
        hide-details
      ></v-text-field>

      <!--======================================================================================
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
                    label="ketik 'DELETE' untuk melajutkan"
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
                    text
                    @click="deleteLaporan"
                    >Delete</v-btn
                  >
                </v-col>
              </v-row>
            </v-container>
          </v-card-text>
        </v-card>
      </v-dialog>
    </v-card-title>

    <!--======================================================================================
        TABLE 
      ==========================================================================================-->
    <v-data-table
      :headers="headers"
      :items="laporans"
      :search="search"
      :items-per-page="5"
      :footer-props="footerProps"
    >
      <template v-slot:[`item.file_link`]="{ item }">
        <a
          :src="item.link"
          @click.prevent="downloadItem(item.file_link, item.file_name)"
        >
          {{ item.file_name }}
        </a>
      </template>
      <template v-slot:[`item.is_internal`]="{ item }">
        {{ item.is_internal ? "Internal" : "Eksternal" }}
      </template>
      <template v-slot:[`item.action`]="{ item }">
        <v-icon color="orange" small class="mr-2" @click="edit(item)">
          mdi-pencil-box
        </v-icon>
        <v-icon color="red" small class="mr-2" @click="openDialog(item)">
          mdi-delete
        </v-icon>
      </template>
      <template v-slot:no-data>
        <v-btn sm outlined color="indigo" style="border: 0">No data</v-btn>
      </template>
    </v-data-table>
  </v-card>
</template>
<script>
import Axios from "axios";
export default {
  data() {
    return {
      search: "",
      deleteIndex: -1,
      dialog: false,
      isRequest: false,
      laporans: [],
      laporan: {},
      key_word: "",

      footerProps: { "items-per-page-options": [5, 10, 15] },
      headers: [
        {
          text: "Judul",
          align: "left",
          value: "title_indo",
        },
        { text: "Deskripsi", value: "description_indo" },
        { text: "File", value: "file_link" },
        { text: "Tipe", value: "is_internal" },
        { text: "Actions", value: "action", sortable: false },
      ],
    };
  },

  beforeMount() {
    this.getLaporansEksternal();
  },

  methods: {
    getLaporansEksternal() {
      let self = this;
      self.$store.dispatch("getLaporans").then((response) => {
        self.laporans = response.data;
      });
    },

    deleteLaporan() {
      let self = this;
      if (!self.isRequest && self.key_word === "DELETE") {
        self.isRequest = true;

        self.$store
          .dispatch("deleteLaporan", self.laporan.id)
          .then((response) => {
            self.key_word = "";
            self.deleteCurrentLaporan();
            flash(response);
            self.isRequest = false;
            self.closeDialog();
          })
          .catch((errors) => {
            self.key_word = "";
            self.isRequest = false;
            self.closeDialog();
          });
      }
    },

    deleteCurrentLaporan() {
      let self = this;
      let index = _.findIndex(self.laporans, function (laporan) {
        return laporan.id === self.laporan.id;
      });

      self.laporans.splice(index, 1);
    },

    openDialog(item) {
      this.laporan = item;
      this.dialog = true;
    },

    closeDialog() {
      this.key_word = "";
      this.dialog = false;
    },

    add() {
      this.$emit("changeStatus", "add");
    },

    edit(item) {
      this.$emit("showEdit", item);
    },

    downloadItem(url, label) {
      Axios.get(url, { responseType: "blob" })
        .then((response) => {
          const blob = new Blob([response.data], { type: "application/*" });
          const link = document.createElement("a");
          link.href = URL.createObjectURL(blob);
          link.download = label;
          link.click();
          URL.revokeObjectURL(link.href);
        })
        .catch(console.error);
    },
  },
};
</script>
