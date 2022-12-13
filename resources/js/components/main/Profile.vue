<template>
  <v-main>
    <v-container fluid>
      <transition name="fade-transition">
        <edit-profile v-if="isEdit" :user="user"></edit-profile>
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
    this.showEdit();
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
    showEdit() {
      self = this;
      setTimeout(() => {
        self.isEdit = true;
      }, 300);
    },
  },
};
</script>