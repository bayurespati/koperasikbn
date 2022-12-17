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
    </v-card-title>

    <!--======================================================================================
        TABLE 
      ==========================================================================================-->
    <v-data-table
      :headers="headers"
      :items="permintaans"
      :search="search"
      :items-per-page="5"
      :footer-props="footerProps"
    >
      <template v-slot:[`item.status`]="{ item }">
        {{ item.status | setStatus }}
      </template>
      <template v-slot:[`item.action`]="{ item }">
        <v-icon color="orange" small class="mr-2" @click="edit(item)">
          mdi-pencil-box
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
      permintaans: [],
      sp: {},
      key_word: "",

      footerProps: { "items-per-page-options": [5, 10, 15] },
      headers: [
        {
          text: "Nama",
          align: "left",
          value: "user.nama",
        },
        {
          text: "Jenis Pengajuan",
          align: "left",
          value: "pengajuan.nama",
        },
        {
          text: "Nominal",
          align: "left",
          value: "nominal_format",
        },
        {
          text: "Tanggal",
          align: "left",
          value: "tanggal_pengajuan",
        },
        {
          text: "Status",
          align: "left",
          value: "status",
        },
        { text: "Actions", value: "action", sortable: false },
      ],
    };
  },

  beforeMount() {
    this.getPermintaan();
  },

  filters: {
    setStatus: function (data) {
      if (data == 1) return "Diajukan";
      if (data == 2) return "Diproses";
      if (data == 3) return "Ditolak";
      if (data == 4) return "Disetujui";
    },
  },

  methods: {
    getPermintaan() {
      let self = this;
      self.$store.dispatch("getPermintaan").then((response) => {
        self.permintaans = response.data;
      });
    },

    edit(item) {
      this.$emit("showEdit", item);
    },
  },
};
</script>
