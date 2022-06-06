<template>
  <v-main>
    <v-container fluid>
      <div class="base-title">
        <h2>Manage Laporan Internal</h2>
      </div>
      <transition name="fade-transition">
        <v-row v-if="status === 'not-update'">
          <v-col
            cols="12"
            xs="12"
            md="4"
            v-for="(laporan, index) in laporans"
            :key="index"
          >
            <v-card class="mx-auto" max-width="400">
              <iframe
                :src="laporan.file_link"
                style="width: 100%; height: 100%; border: none"
              ></iframe>
              <v-card-actions>
                <v-btn color="success" text @click="update(laporan)">
                  Update
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
        <v-row v-if="status === 'update'">
          <v-col col="12">
            <update :laporan="laporan" @cancelEdit="cancel($event)"></update>
          </v-col>
        </v-row>
      </transition>
    </v-container>
  </v-main>
</template>

<script>
import Update from "./Update";

export default {
  data() {
    return {
      laporans: [],
      status: "not-update",
      laporan: "",
    };
  },

  beforeMount() {
    this.getLaporanInternal();
  },

  components: {
    Update,
  },

  methods: {
    getLaporanInternal() {
      axios
        .get("/dashboard/laporans/internal")
        .then((response) => {
          this.laporans = response.data;
        })
        .catch((errors) => {});
    },

    update(value) {
      let self = this;
      self.laporan = value;
      self.status = "";
      setTimeout(function () {
        self.status = "update";
      }, 300);
    },

    cancel(value) {
      let self = this;

      if (value == "success") {
        this.getLaporanInternal();
      }

      self.status = "";
      setTimeout(function () {
        self.status = "not-update";
      }, 300);
    },
  },
};
</script>