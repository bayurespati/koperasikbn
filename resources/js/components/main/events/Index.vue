<template>
  <v-main>
    <v-container fluid>
      <v-row>
        <v-col cols="12">
          <div class="base-title">
            <h2>Manage Event</h2>
            <p class="color-sub-title">Here you can manage event</p>
          </div>
          <transition name="fade-transition">
            <images
              v-if="status === 'image'"
              @cancelImage="changeStatus($event)"
              :event="event"
            ></images>
            <list
              v-if="status === 'table'"
              @showImage="showImage($event)"
              @showEdit="showEdit($event)"
              @changeStatus="changeStatus($event)"
            ></list>
            <add
              v-if="status === 'add'"
              @cancelAdd="changeStatus($event)"
            ></add>
            <edit
              v-if="status === 'edit'"
              @cancelEdit="changeStatus($event)"
              :event="event"
            ></edit>
          </transition>
        </v-col>
      </v-row>
    </v-container>
  </v-main>
</template>

<script>
import List from "./Table.vue";
import Images from "./image/Image.vue";
import Edit from "./Edit.vue";
import Add from "./Add.vue";

export default {
  data() {
    return {
      status: "table",
      event: "",
    };
  },

  components: {
    List,
    Edit,
    Add,
    Images,
  },

  methods: {
    changeStatus(value) {
      this.status = "";
      let self = this;
      setTimeout(function () {
        self.status = value;
      }, 300);
    },

    showEdit(value) {
      let self = this;
      this.status = "";
      self.event = value;
      setTimeout(function () {
        self.status = "edit";
      }, 300);
    },

    showImage(value) {
      let self = this;
      this.status = "";
      self.event = value;
      setTimeout(function () {
        self.status = "image";
      }, 300);
    },
  },
};
</script>