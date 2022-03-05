<template>
  <v-card>
    <v-card-title>
      <div class="text-center mt-4">
        <v-btn rounded color="primary" dark @click="add()">Create User</v-btn>
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
                    @click="deleteUser"
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
      :items="users"
      :search="search"
      :items-per-page="5"
      :footer-props="footerProps"
    >
      <template v-slot:[`item.image`]="{ item }">
        <div class="p-2">
          <v-avatar v-if="item.image_link">
            <v-img :src="item.image_link" height="50px" width="50px"></v-img>
          </v-avatar>
          <v-avatar color="blue lighten-1" size="48" v-else>
            <span class="white--text text-h7">{{ item.nama | inisial }}</span>
          </v-avatar>
        </div>
      </template>
      <template v-slot:[`item.action`]="{ item }">
        <v-tooltip top>
          <template v-slot:activator="{ on, attrs }">
            <v-icon
              color="orange"
              small
              class="mr-2"
              @click="edit(item)"
              v-bind="attrs"
              v-on="on"
            >
              mdi-pencil-box
            </v-icon>
          </template>
          <span>edit</span>
        </v-tooltip>
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
export default {
  data() {
    return {
      search: "",
      deleteIndex: -1,
      dialog: false,
      isRequest: false,
      users: [],
      user: {},
      key_word: "",

      footerProps: { "items-per-page-options": [5, 10, 15] },
      headers: [
        {
          text: "Image",
          value: "image",
          sortable: false,
        },
        {
          text: "Nama",
          align: "left",
          value: "nama",
        },
        {
          text: "Nip",
          align: "left",
          value: "nip",
        },
        {
          text: "No anggota",
          align: "left",
          value: "no_anggota",
        },
        { text: "Email", value: "email" },
        { text: "Actions", value: "action", sortable: false },
      ],
    };
  },

  beforeMount() {
    this.getUsers();
  },

  filters: {
    inisial: function (data) {
      return data
        .split(" ")
        .map((n) => n[0])
        .join("");
    },
  },

  methods: {
    getUsers() {
      let self = this;
      self.$store.dispatch("getUsers").then((response) => {
        self.users = response.data;
      });
    },

    deleteUser() {
      let self = this;
      if (!self.isRequest && self.key_word === "DELETE") {
        self.isRequest = true;

        self.$store
          .dispatch("deleteUser", self.user.id)
          .then((response) => {
            self.key_word = "";
            self.deleteCurrentUser();
            flash(response.message);
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

    deleteCurrentUser() {
      let self = this;
      let index = _.findIndex(self.user, function (user) {
        return user.id === self.user.id;
      });

      self.users.splice(index, 1);
    },

    openDialog(item) {
      this.user = item;
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

    showImage(item) {
      this.$emit("showImage", item);
    },
  },
};
</script>
