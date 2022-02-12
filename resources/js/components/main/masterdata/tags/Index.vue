<template>
  <v-main>
    <v-container fluid>
      <v-row>
        <v-col cols="12">
          <div class="base-title">
            <h2>Manage Tag</h2>
            <p class="color-sub-title">Here you can manage tag</p>
          </div>
          <transition name="fade-transition">
            <list
              v-if="status === 'table'"
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
              :tag="tag"
            ></edit>
          </transition>
        </v-col>
      </v-row>
    </v-container>
  </v-main>
</template>

<script>
import List from "./Table.vue";
import Edit from "./Edit.vue";
import Add from "./Add.vue";

export default {
  data() {
    return {
      status: "table",
      tag: "",
    };
  },

  components: {
    List,
    Edit,
    Add,
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
      self.tag = value;
      setTimeout(function () {
        self.status = "edit";
      }, 300);
    },
  },
};
</script>