<template>
  <div>
    <v-expand-transition>
      <add v-show="isAdd" @close="isAdd = !isAdd" :event="event"></add>
    </v-expand-transition>

    <table-image
      @back="back()"
      @addImage="isAdd = !isAdd"
      :event="event"
    ></table-image>
  </div>
</template>

<script>
import TableImage from "./List.vue";
import Add from "./Add.vue";

export default {
  props: {
    event: {},
  },

  data() {
    return {
      isAdd: false,
    };
  },

  components: {
    TableImage,
    Add,
  },

  methods: {
    back() {
      this.$emit("cancelImage", "table");
    },
  },
};
</script>