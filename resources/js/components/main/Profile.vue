<template>
  <v-main>
    <v-container fluid>
      <v-card class="mx-auto" max-width="1000" tile>
        <v-img
          height="200"
          src="https://cdn.vuetifyjs.com/images/cards/server-room.jpg"
        ></v-img>
        <v-row style="margin: 2.5%; position: absolute; top: 130px">
          <v-list-item>
            <v-list-item-avatar v-if="user.image_link" size="100">
              <v-img :src="user.image_link"></v-img>
            </v-list-item-avatar>
            <v-list-item-avatar size="100" v-else>
              <img
                src="https://www.w3schools.com/howto/img_avatar.png"
                alt="John"
              />
            </v-list-item-avatar>
            <v-list-item-content>
              <v-list-item-title class="title" style="margin-top: 20px">
                {{ user.nama }}
              </v-list-item-title>
              <v-list-item-subtitle>
                {{ user.jabatan_kbn == null ? "-" : user.jabatan_kbn.nama }}
                | {{ user.nip }}
              </v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-row>
        <v-card-actions class="">
          <v-spacer></v-spacer>
          <v-btn color="primary" right text @click="isEdit = !isEdit">
            Update
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-container>
    <v-container fluid>
      <transition name="fade-transition">
        <edit-profile
          v-if="isEdit"
          @cancelEdit="isEdit = !isEdit"
          :user="user"
        ></edit-profile>
      </transition>
    </v-container>
  </v-main>
</template>

<script>
import { mapGetters } from "vuex";
import EditProfile from "./EditProfile.vue";
export default {
  data() {
    return {
      isEdit: false,
    };
  },
  components: {
    EditProfile,
  },

  beforeMount() {
    this.getUser();
  },

  computed: {
    ...mapGetters({
      user: "user",
    }),
  },

  filters: {
    isNull: function (data) {
      return data == null || data == "" ? "-" : data;
    },
  },

  methods: {
    getUser() {
      this.$store
        .dispatch("getUser")
        .then((response) => {})
        .catch((errors) => {});
    },
  },
};
</script>