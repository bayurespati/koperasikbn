<template>
  <v-card>
    <v-card-title>
      <div class="text-center mt-4"></div>
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
                    @click="deleteSimpanPinjam"
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
      :items="simpan_pinjam"
      :search="search"
      :items-per-page="5"
      :footer-props="footerProps"
    >
      <template v-slot:[`item.action`]="{ item }">
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
      simpan_pinjam: [],
      sp: {},
      key_word: "",

      footerProps: { "items-per-page-options": [5, 10, 15] },
      headers: [
        {
          text: "No anggota",
          align: "left",
          value: "no_anggota",
        },
        {
          text: "Nama",
          align: "left",
          value: "user.nama",
        },
        {
          text: "Keterangan",
          align: "left",
          value: "keterangan",
        },
        {
          text: "Akun Pinjaman",
          align: "left",
          value: "akun_pinjaman",
        },
        {
          text: "Saldo",
          align: "left",
          value: "saldo_format",
        },
        { text: "Actions", value: "action", sortable: false },
      ],
    };
  },

  beforeMount() {
    this.getSimpanPinjam();
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
    getSimpanPinjam() {
      let self = this;
      self.$store.dispatch("getSimpanPinjam").then((response) => {
        self.simpan_pinjam = response.data;
      });
    },

    deleteSimpanPinjam() {
      let self = this;
      if (!self.isRequest && self.key_word === "DELETE") {
        self.isRequest = true;

        self.$store
          .dispatch("deleteSimpanPinjam", self.sp.id)
          .then((response) => {
            self.key_word = "";
            self.deleteCurrentSimpanPinjam();
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

    deleteCurrentSimpanPinjam() {
      let self = this;
      let index = _.findIndex(self.simpna_pinjam, function (sp) {
        return sp.id === self.sp.id;
      });

      self.simpna_pinjam.splice(index, 1);
    },

    openDialog(item) {
      this.sp = item;
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
