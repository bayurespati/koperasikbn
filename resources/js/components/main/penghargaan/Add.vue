<template>
  <div>
    <v-card>
      <v-card-title>
        <span class="title">Create</span>
      </v-card-title>
      <v-form v-model="valid">
        <v-container>
          <v-row>
            <!--======================================================================================
                TITLE INDO 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-text-field
                @input="$v.model.title_indo.$touch()"
                @blur="$v.model.title_indo.$touch()"
                :error-messages="titleIndoError"
                v-model="model.title_indo"
                label="Judul Indonesia"
                required
              >
              </v-text-field>
            </v-col>

            <!--======================================================================================
                TITLE ENG 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-text-field
                @input="$v.model.title.$touch()"
                @blur="$v.model.title.$touch()"
                :error-messages="titleError"
                v-model="model.title"
                label="Judul Inggris"
                required
              >
              </v-text-field>
            </v-col>

            <!--======================================================================================
                DESCRIPTION INDO
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-textarea
                @input="$v.model.description_indo.$touch()"
                @blur="$v.model.description_indo.$touch()"
                :error-messages="descriptionIndoError"
                v-model="model.description_indo"
                label="Deskripsi bahasa Indonesia"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
                DESCRIPTION ENG 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-textarea
                @input="$v.model.description.$touch()"
                @blur="$v.model.description.$touch()"
                :error-messages="descriptionError"
                v-model="model.description"
                label="Deskripsi bahasa Inggris"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
                FILE UPLOAD 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-text-field
                @input="$v.model.file_file.$touch()"
                @blur="$v.model.file_file.$touch()"
                :error-messages="fileError"
                small-chips
                v-model="model.file_name"
                @click="pickFile"
                label="File"
              ></v-text-field>
              <input
                type="file"
                ref="fileUpload"
                style="display: none"
                accept="image/*"
                @change="onFilePicked"
              />
            </v-col>

            <!--======================================================================================
                BUTTON
            ==========================================================================================-->
            <v-col cols="12 text-left">
              <v-btn
                rounded
                color="success"
                :loading="isRequest"
                @click="save()"
                >save</v-btn
              >
              <v-btn rounded color="error" class="ml-3" @click="close()"
                >cancel</v-btn
              >
            </v-col>
          </v-row>
        </v-container>
      </v-form>
    </v-card>
  </div>
</template>
<script>
import { required } from "vuelidate/lib/validators";
import { VueEditor } from "vue2-editor";

export default {
  components: {
    VueEditor,
  },

  data() {
    return {
      model: {
        file_name: "",
        file_path: "",
        file_file: null,
        title: "",
        title_indo: "",
        description: "",
        description_indo: "",
      },
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      title: { required },
      title_indo: { required },
      description: { required },
      description_indo: { required },
      file_file: { required },
    },
  },

  computed: {
    isValid() {
      return (
        this.titleError.length == 0 &&
        this.titleIndoError.length == 0 &&
        this.descriptionError.length == 0 &&
        this.descriptionIndoError.length == 0 &&
        this.model.file_file != ""
      );
    },

    fileError() {
      const errors = [];
      if (!this.$v.model.file_file.$dirty) return errors;
      !this.$v.model.file_file.required && errors.push("File harus diisi.");
      return errors;
    },

    titleError() {
      const errors = [];
      if (!this.$v.model.title.$dirty) return errors;
      !this.$v.model.title.required && errors.push("Judul harus diisi");
      return errors;
    },

    titleIndoError() {
      const errors = [];
      if (!this.$v.model.title_indo.$dirty) return errors;
      !this.$v.model.title_indo.required && errors.push("Judul harus diisi");
      return errors;
    },

    descriptionError() {
      const errors = [];
      if (!this.$v.model.description.$dirty) return errors;
      !this.$v.model.description.required &&
        errors.push("Deskripsi harus diisi.");
      return errors;
    },

    descriptionIndoError() {
      const errors = [];
      if (!this.$v.model.description_indo.$dirty) return errors;
      !this.$v.model.description_indo.required &&
        errors.push("Deskripsi harus diisi");
      return errors;
    },
  },

  methods: {
    save(content) {
      this.$v.$touch();
      let self = this;

      if (!self.isRequest && self.isValid) {
        const data = {
          title: self.model.title,
          title_indo: self.model.title_indo,
          description: self.model.description,
          description_indo: self.model.description_indo,
          file_file: self.model.file_file,
          file_name: self.model.file_name,
        };
        self.isRequest = true;
        self.$store
          .dispatch("storePenghargaan", data)
          .then((response) => {
            self.clearForm();
            flash(response);
            self.isRequest = false;
            self.close();
          })
          .catch((errors) => {
            Object.keys(errors).forEach((field) => {
              errors[field].forEach((message) => {
                flash(message, "danger", 5000);
              });
              self.isRequest = false;
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
          this.model.file_file = fr.result;
        });
      }
    },

    clearForm() {
      this.$v.$reset();
      this.model.title = "";
      this.model.title_indo = "";
      this.model.description = "";
      this.model.description_indo = "";
      this.model.file_name = "";
      this.model.file_link = "";
      this.model.file_file = null;
    },

    close() {
      this.$emit("cancelAdd", "table");
    },
  },
};
</script>
