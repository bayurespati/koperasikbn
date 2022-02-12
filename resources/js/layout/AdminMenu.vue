<template>
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
</template>


<script>
export default {
  data: () => ({
    menus: [
      {
        icon: "mdi-18px mdi-face-profile",
        text: "Profile",
        link: "/profile",
      },
      {
        icon: "mdi-18px mdi-webpack",
        text: "Event",
        link: "/event",
      },
      {
        icon: "mdi-18px mdi-newspaper",
        text: "News",
        link: "/news",
      },
    ],
  }),
};
</script>
