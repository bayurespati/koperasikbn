<template>
  <v-app id="inspire">
    <nav>
      <v-navigation-drawer v-model="drawer" class="green lighten-1" app dark>
        <v-layout column align-center class="mt-5">
          <v-avatar size="100" v-if="user.image_link">
            <img
              :src="
                user.image_link == null
                  ? 'image_static/avatar.jpg'
                  : user.image_link
              "
              alt=""
            />
          </v-avatar>
          <p class="white--text subheading mt-1">
            {{ user == null ? "" : user.nama | inisial }}
          </p>
        </v-layout>

        <v-list dense rounded>
          <template v-for="(item, index) in menus">
            <v-list-group
              v-if="item.children"
              :prepend-icon="item.parent_icon"
              :key="index"
            >
              <template v-slot:activator>
                <v-list-item-title>{{ item.text }}</v-list-item-title>
              </template>

              <v-list-item
                sub-group
                v-for="(child, i) in item.children"
                :to="child.link"
                :key="i"
                link
              >
                <v-list-item-icon></v-list-item-icon>
                <v-list-item-title v-text="child.text"></v-list-item-title>
              </v-list-item>
            </v-list-group>

            <v-list-item
              v-else
              :key="item.text"
              router
              :to="item.link"
              active-class="active-color"
            >
              <v-list-item-action>
                <v-icon>{{ item.icon }}</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>{{ item.text }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </template>
        </v-list>
      </v-navigation-drawer>

      <v-app-bar app dense color="white">
        <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
        <v-toolbar-title>
          <span class="font-weight-light">
            {{ user == null ? "" : user.name }}
          </span>
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-btn color="gray" @click="logout">
          <span> Sign Out </span>
          <v-icon right>mdi-logout-variant</v-icon>
        </v-btn>
      </v-app-bar>
      <transition name="slide">
        <router-view></router-view>
      </transition>
    </nav>
  </v-app>
</template>

<script>
import MemberMenu from "./MemberMenu.vue";
import AdminMenu from "./AdminMenu.vue";
import SuperAdminMenu from "./SuperAdminMenu.vue";
import { mapGetters } from "vuex";
export default {
  components: {
    MemberMenu,
    AdminMenu,
    SuperAdminMenu,
  },
  data: () => ({
    drawer: null,
    menus: [],
    superAdmin: [
      {
        icon: "mdi-18px mdi-face-profile",
        text: "Profile",
        link: "/profile",
        permission: [1, 2, 3],
      },
      {
        icon: "mdi-18px mdi-home",
        text: "Homepage",
        link: "/homepage",
        permission: [1, 2],
      },
      {
        icon: "mdi-18px mdi-bank",
        text: "Simpanan",
        link: "/simpanan",
        permission: [1, 2, 3],
      },
      {
        icon: "mdi-18px mdi-pocket",
        text: "Pinjaman",
        link: "/pinjaman",
        permission: [1, 2, 3],
      },
      {
        icon: "mdi-18px mdi-human-male",
        text: "Manage User",
        link: "/users",
        permission: [1],
      },
      {
        icon: "mdi-chevron-up",
        "icon-alt": "mdi-chevron-down",
        parent_icon: "mdi-file-video",
        text: "Media",
        model: false,
        permission: [1, 2],
        children: [
          {
            icon: "mdi-18px mdi-home",
            text: "Foto",
            link: "/foto",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Video",
            link: "/video",
            permission: [1, 2],
          },
        ],
      },
      {
        icon: "mdi-18px mdi-calendar-text",
        text: "Kalender",
        link: "/kalender",
        permission: [1, 2],
      },
      {
        icon: "mdi-chevron-up",
        "icon-alt": "mdi-chevron-down",
        parent_icon: "mdi-file-video",
        text: "Laporan",
        model: false,
        permission: [1, 2],
        children: [
          {
            icon: "mdi-18px mdi-home",
            text: "Internal",
            link: "/laporan-internal",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Eksternal",
            link: "/laporan-eksternal",
            permission: [1, 2],
          },
        ],
      },
      {
        icon: "mdi-18px mdi-webpack",
        text: "FAQ",
        link: "/faq",
        permission: [1, 2],
      },
      {
        icon: "mdi-18px mdi-newspaper",
        text: "Artikel",
        link: "/artikel",
        permission: [1, 2],
      },
      {
        icon: "mdi-chevron-up",
        "icon-alt": "mdi-chevron-down",
        parent_icon: "mdi-server-security",
        text: "Master Data",
        model: false,
        permission: [1, 2],
        children: [
          {
            icon: "mdi-18px mdi-home",
            text: "Jabatan Kbn",
            link: "/jabatan-kbn",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Jabatan Koperasi",
            link: "/jabatan-koperasi",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Unit",
            link: "/unit",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Divisi",
            link: "/divisi",
            permission: [1, 2],
          },
        ],
      },
    ],
    admin: [
      {
        icon: "mdi-18px mdi-face-profile",
        text: "Profile",
        link: "/profile",
        permission: [1, 2, 3],
      },
      {
        icon: "mdi-18px mdi-home",
        text: "Homepage",
        link: "/homepage",
        permission: [1, 2],
      },
      {
        icon: "mdi-chevron-up",
        "icon-alt": "mdi-chevron-down",
        parent_icon: "mdi-file-video",
        text: "Media",
        model: false,
        permission: [1, 2],
        children: [
          {
            icon: "mdi-18px mdi-home",
            text: "Foto",
            link: "/foto",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Video",
            link: "/video",
            permission: [1, 2],
          },
        ],
      },
      {
        icon: "mdi-18px mdi-bank",
        text: "Simpanan",
        link: "/simpanan",
        permission: [1, 2, 3],
      },
      {
        icon: "mdi-18px mdi-pocket",
        text: "Pinjaman",
        link: "/pinjaman",
        permission: [1, 2, 3],
      },
      {
        icon: "mdi-18px mdi-calendar-text",
        text: "Kalender",
        link: "/kalender",
        permission: [1, 2],
      },
      {
        icon: "mdi-chevron-up",
        "icon-alt": "mdi-chevron-down",
        parent_icon: "mdi-file-video",
        text: "Laporan",
        model: false,
        permission: [1, 2],
        children: [
          {
            icon: "mdi-18px mdi-home",
            text: "Internal",
            link: "/laporan-internal",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Eksternal",
            link: "/laporan-eksternal",
            permission: [1, 2],
          },
        ],
      },
      {
        icon: "mdi-18px mdi-webpack",
        text: "FAQ",
        link: "/faq",
        permission: [1, 2],
      },
      {
        icon: "mdi-18px mdi-newspaper",
        text: "Artikel",
        link: "/artikel",
        permission: [1, 2],
      },
      {
        icon: "mdi-chevron-up",
        "icon-alt": "mdi-chevron-down",
        parent_icon: "mdi-server-security",
        text: "Master Data",
        model: false,
        permission: [1, 2],
        children: [
          {
            icon: "mdi-18px mdi-home",
            text: "Jabatan Kbn",
            link: "/jabatan-kbn",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Jabatan Koperasi",
            link: "/jabatan-koperasi",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Unit",
            link: "/unit",
            permission: [1, 2],
          },
          {
            icon: "mdi-18px mdi-home",
            text: "Divisi",
            link: "/divisi",
            permission: [1, 2],
          },
        ],
      },
    ],
    member: [
      {
        icon: "mdi-18px mdi-face-profile",
        text: "Profile",
        link: "/profile",
        permission: [1, 2, 3],
      },
      {
        icon: "mdi-18px mdi-bank",
        text: "Simpanan",
        link: "/simpanan",
        permission: [1, 2, 3],
      },
      {
        icon: "mdi-18px mdi-pocket",
        text: "Pinjaman",
        link: "/pinjaman",
        permission: [1, 2, 3],
      },
    ],
  }),

  beforeMount() {
    this.getUser();
  },

  filters: {
    inisial: function (data) {
      if (data != undefined) return "Halo, " + data.split(" ")[0];
    },
  },

  computed: {
    ...mapGetters({
      user: "user",
    }),
  },

  methods: {
    getUser() {
      this.$store
        .dispatch("getUser")
        .then((response) => {
          const role_id = response.data.data.role_id;
          if (role_id == 1) this.menus = this.superAdmin;
          if (role_id == 2) this.menus = this.admin;
          if (role_id == 3) this.menus = this.member;
        })
        .catch((errors) => {});
    },

    isHasPermision(item) {
      if (this.user.role_id != undefined)
        return item.permission.includes(this.user.role_id);
    },

    logout() {
      axios.post("/logout").then((response) => {
        window.location.href = "login";
      });
    },
  },
};
</script>

<style type="text/css">
.baseColor {
  color: #32c36c;
}
.mdi-chevron-up::before {
  content: "\F143";
  color: white;
}

.mdi-chevron-down::before {
  content: "\F140";
  color: white;
}

.mdi-format-page-break::before {
  content: "\F6D6";
  color: white;
}

.color-sub-title {
  color: #3490dc;
}
</style>

<style scoped>
.active-color {
  color: white;
}

.v-list-item__title {
  color: white;
}

a:hover {
  text-decoration: none;
}
.slide-enter {
  opacity: 0;
}

.slide-enter-active {
  animation: slide-in 0.6s ease;
  transition: opacity 0.6s;
}

.slide-leave-active {
  animation: slide-out 0.6s ease forwards;
  transition: opacity 0.6s;
  opacity: 0;
  position: absolute;
  width: 100%;
}

.slide-move {
  transition: transform 0.6s;
}

@keyframes slide-in {
  from {
    transform: translateY(-20px);
  }
  to {
    background-color: white;
    transform: translateY(0px);
  }
}

@keyframes slide-out {
  from {
    transform: translateY(0);
  }
  to {
    transform: translateY(-20px);
  }
}
</style>