<template>
  <v-main>
    <v-container fluid>
      <div class="base-title">
        <h2>Manage Kalender</h2>
      </div>
      <transition name="fade-transition">
        <v-row v-if="status === 'not-update'">
          <template v-for="(kalender, index) in kalenders">
            <v-col cols="12" xs="12" md="4" :key="index">
              <v-card class="mx-auto" max-width="400">
                <v-img
                  class="white--text align-end"
                  height="200px"
                  :src="
                    kalender.image_link == null
                      ? 'image_static/hero-1-bg.jpg'
                      : kalender.image_link
                  "
                ></v-img>

                <v-card-actions>
                  <v-btn color="success" text @click="update(kalender)">
                    Update
                  </v-btn>
                  {{ kalender.name }}
                </v-card-actions>
              </v-card>
            </v-col>
          </template>
        </v-row>
        <v-row v-if="status === 'update'">
          <v-col col="12">
            <update :kalender="kalender" @cancel="cancel($event)"></update>
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
      kalenders: [],
      status: "not-update",
      kalender: "",
    };
  },

  beforeMount() {
    this.getKalenders();
  },

  components: {
    Update,
  },

  methods: {
    getKalenders() {
      axios
        .get("/dashboard/kalenders")
        .then((response) => {
          this.kalenders = response.data;
        })
        .catch((errors) => {});
    },

    update(value) {
      let self = this;
      self.kalender = value;
      self.status = "";
      setTimeout(function () {
        self.status = "update";
      }, 300);
    },

    cancel(value) {
      let self = this;

      if (value == "success") {
        this.getKalenders();
      }
      self.status = "";
      setTimeout(function () {
        self.status = "not-update";
      }, 300);
    },
  },
};
</script>