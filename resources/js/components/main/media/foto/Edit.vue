<template>
  <div>
    <v-card>
      <v-card-title>
        <span class="title">Edit</span>
      </v-card-title>
      <v-form v-model="valid">
        <v-container>
          <v-row>
            <!--======================================================================================
                SHOW IMAGE 
            ==========================================================================================-->
            <v-col cols="12" v-if="model.image_url">
              <v-img
                :src="model.image_url"
                max-height="200"
                contain
                aspect-ratio="1.7"
              ></v-img>
            </v-col>

            <!--======================================================================================
                SHOW IMAGE 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-text-field
                @input="$v.model.image_name.$touch()"
                @blur="$v.model.image_name.$touch()"
                :error-messages="imageError"
                prepend-icon="mdi-camera"
                v-model="model.image_name"
                @click="pickFile"
                lavel="Image"
              ></v-text-field>
              <input
                @change="onFilePicked"
                accept="image/*"
                style="display: none"
                type="file"
                ref="imageUpload"
              />
            </v-col>

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
                CATEGORY 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-select
                @change="$v.model.category.$touch()"
                @blur="$v.model.category.$touch()"
                :error-messages="categoryError"
                v-model="model.category"
                :items="categories"
                label="Kategori"
                item-text="nama"
                item-value="nama"
                persistent-hint
                required
                small-chips
              ></v-select>
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

  props: { image: {} },
  data() {
    return {
      model: {
        image_name: this.image.image_name ?? "",
        image_url: this.image.image_link ?? "",
        title: this.image.title ?? "",
        title_indo: this.image.title_indo ?? "",
        category: this.image.category,
      },

      categories: [
        { nama: "Layanan simpanan" },
        { nama: "Layanan pinjaman" },
        { nama: "Layanan bisnis" },
        { nama: "Layanan Komersial" },
      ],
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      image_name: { required },
      title_indo: { required },
      title: { required },
      category: { required },
    },
  },

  computed: {
    isValid() {
      return (
        this.imageError.length == 0 &&
        this.categoryError.length == 0 &&
        this.titleError.length == 0 &&
        this.titleIndoError.length == 0 &&
        this.model.image_name != null
      );
    },

    imageError() {
      const errors = [];
      if (!this.$v.model.image_name.$dirty) return errors;
      !this.$v.model.image_name.required && errors.push("Gambar harus diisi.");
      return errors;
    },

    titleError() {
      const errors = [];
      if (!this.$v.model.title.$dirty) return errors;
      !this.$v.model.title.required && errors.push("Judul harus diisi.");
      return errors;
    },

    titleIndoError() {
      const errors = [];
      if (!this.$v.model.title_indo.$dirty) return errors;
      !this.$v.model.title_indo.required && errors.push("Judul harus diisi.");
      return errors;
    },

    categoryError() {
      const errors = [];
      if (!this.$v.model.title.$dirty) return errors;
      !this.$v.model.title.required && errors.push("Kategori harus diisi");
      return errors;
    },
  },

  methods: {
    save(content) {
      let self = this;
      self.$v.$touch();

      if (!self.isRequest && self.isValid) {
        const data = {
          image_name: self.model.image_name,
          image_file: self.model.image_url,
          title: self.model.title,
          title_indo: self.model.title_indo,
          category: self.model.category,
          id: self.image.id,
        };
        self.isRequets = true;
        self.$store
          .dispatch("editImage", data)
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

    clearForm() {
      this.$v.$reset();
      this.model.image_name = "";
      this.model.image_url = "";
      this.model.title = "";
      this.model.title_indo = "";
      this.model.category = "";
    },

    pickFile() {
      this.$refs.imageUpload.click();
    },

    onFilePicked(e) {
      let files = null;
      files = e.target.files;

      if (files[0] !== undefined) {
        this.model.image_name = files[0].name;

        if (this.model.image_name.lastIndexOf(".") <= 0) {
          return;
        }
        const fr = new FileReader();

        fr.readAsDataURL(files[0]);

        fr.addEventListener("load", () => {
          this.model.image_url = fr.result;
        });
      } else {
        this.model.image_url = "";
        this.model.image_name = "";
      }
    },

    close() {
      this.$emit("cancelEdit", "table");
    },
  },
};
</script>

