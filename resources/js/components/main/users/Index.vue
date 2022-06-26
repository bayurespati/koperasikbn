<template>
  <v-main>
    <v-container fluid>
      <v-row>
        <v-col cols="12">
          <div class="base-title">
            <h2>Manage Users</h2>
            <p class="color-sub-title">Here you can manage users</p>
          </div>
          <v-card>
            <v-row class="p-2 mb-6 mt-2">
              <v-col cols="12" xs="12" md="12">
                <v-text-field
                  small-chips
                  v-model="model.file_name"
                  @click="pickFile"
                  label="File"
                ></v-text-field>
                <input
                  type="file"
                  ref="fileUpload"
                  style="display: none"
                  accept="/*"
                  @change="onFilePicked"
                />
              </v-col>

              <v-col cols="12" xs="12" md="6" class="pt-0">
                <v-btn
                  rounded
                  small
                  color="success"
                  @click="save()"
                  :disabled="isRequest"
                >
                  {{ isRequest ? "WAIT" : "UPLOAD" }}
                </v-btn>
              </v-col>
            </v-row>
          </v-card>
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
              :user="user"
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
      model: {
        file_name: "",
        file_user: null,
      },
      status: "table",
      user: "",
      isRequest: false,
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
      self.user = value;
      setTimeout(function () {
        self.status = "edit";
      }, 300);
    },

    showImage(value) {
      let self = this;
      this.status = "";
      self.user = value;
      setTimeout(function () {
        self.status = "image";
      }, 300);
    },

    save() {
      let self = this;
      if (!self.isRequest) {
        const data = new FormData();
        data.append("file", this.model.file_user);
        self.isRequest = true;

        self.$store
          .dispatch("uploadUser", data)
          .then((response) => {
            flash(response.message);
            self.model.file_name = null;
            self.model.file_user = null;
            self.isRequest = false;
          })
          .catch((errors) => {
            self.model.file_name = null;
            self.model.file_user = null;
            self.isRequest = false;
            Object.keys(errors).forEach((field) => {
              errors[field].forEach((message) => {
                flash(message, "danger", 5000);
              });
            });
          });
      }
    },

    pickFile() {
      this.$refs.fileUpload.click();
    },

    onFilePicked(e) {
      let files = null;
      files = e.target.files;
      if (files[0] !== undefined) {
        this.model.file_name = files[0].name;
        if (this.model.file_name.lastIndexOf(".") <= 0) {
          return;
        }
        const fr = new FileReader();
        fr.readAsDataURL(files[0]);
        fr.addEventListener("load", () => {
          this.model.file_user = files[0];
        });
      }
    },
  },
};
</script>