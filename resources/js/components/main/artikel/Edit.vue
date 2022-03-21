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
                @input="$v.model.image_file.$touch()"
                @blur="$v.model.image_file.$touch()"
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
                DESCRIPTION INDO
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-textarea
                @input="$v.model.description_indo.$touch()"
                @blur="$v.model.description_indo.$touch()"
                :error-messages="descriptionIndoError"
                v-model="model.description_indo"
                label="Deskripsi Indonesia"
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
                label="Deskripsi Inggris"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
                CONTENT INDO 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <div>Content Indonesia</div>
              <vue-editor v-model="model.content_indo"></vue-editor>
            </v-col>

            <!--======================================================================================
                CONTENT ENG 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <div>Content Inggris</div>
              <vue-editor v-model="model.content"></vue-editor>
            </v-col>

            <!--======================================================================================
                TYPE 
            ==========================================================================================-->
            <v-col cols="6" xs="12" md="6">
              <v-select
                @change="$v.model.type.$touch()"
                @blur="$v.model.type.$touch()"
                :error-messages="typeError"
                v-model="model.type"
                :items="types"
                label="Tipe"
                item-text="nama"
                item-value="nama"
                persistent-hint
                required
                small-chips
              ></v-select>
            </v-col>

            <!--======================================================================================
                CATEGORY 
            ==========================================================================================-->
            <v-col cols="6" xs="12" md="6">
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

  props: { artikel: {} },
  data() {
    return {
      model: {
        image_name: this.artikel.image_name ?? "",
        image_url: this.artikel.image_link ?? "",
        image_file: NULL,
        title: this.artikel.title ?? "",
        description: this.artikel.description ?? "",
        content: this.artikel.content ?? "",
        description_indo: this.artikel.description_indo ?? "",
        content_indo: this.artikel.content_indo ?? "",
        title_indo: this.artikel.title_indo ?? "",
        type: this.artikel.type,
        category: this.artikel.category,
      },

      //Toolbar for WYSIWYG
      customToolbar: [
        [{ header: [false, 1, 2, 3, 4, 5, 6] }],
        ["bold", "italic", "underline", "strike"],
        [
          { align: "" },
          { align: "center" },
          { align: "right" },
          { align: "justify" },
        ],
        ["blockquote", "code-block"],
        [{ list: "ordered" }, { list: "bullet" }, { list: "check" }],
        [{ indent: "-1" }, { indent: "+1" }],
        [{ color: [] }, { background: [] }],
        ["clean"],
      ],
      types: [{ nama: "Berita" }, { nama: "pengumuman" }],
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
      image_file: { required },
      description_indo: { required },
      title_indo: { required },
      description: { required },
      title: { required },
      type: { required },
      category: { required },
    },
  },

  computed: {
    isValid() {
      return (
        this.typeError.length == 0 &&
        this.categoryError.length == 0 &&
        this.titleError.length == 0 &&
        this.descriptionError.length == 0 &&
        this.titleIndoError.length == 0 &&
        this.descriptionIndoError.length == 0 &&
        this.model.content != "" &&
        this.model.content_indo != "" &&
        this.model.image_name != null
      );
    },

    imageError() {
      const errors = [];
      if (!this.$v.model.image_file.$dirty) return errors;
      !this.$v.model.image_file.required && errors.push("Gambar harus diisi.");
      return errors;
    },

    titleError() {
      const errors = [];
      if (!this.$v.model.title.$dirty) return errors;
      !this.$v.model.title.required && errors.push("Judul harus diisi.");
      return errors;
    },

    descriptionError() {
      const errors = [];
      if (!this.$v.model.description.$dirty) return errors;
      !this.$v.model.description.required &&
        errors.push("Deskripsi harus diisi.");
      return errors;
    },

    titleIndoError() {
      const errors = [];
      if (!this.$v.model.title_indo.$dirty) return errors;
      !this.$v.model.title_indo.required && errors.push("Judul harus diisi.");
      return errors;
    },

    descriptionIndoError() {
      const errors = [];
      if (!this.$v.model.description_indo.$dirty) return errors;
      !this.$v.model.description_indo.required &&
        errors.push("Deskripsi harus diisi.");
      return errors;
    },

    typeError() {
      const errors = [];
      if (!this.$v.model.title.$dirty) return errors;
      !this.$v.model.title.required && errors.push("Tiper harus diisi");
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
          description: self.model.description,
          content: self.model.content,
          title: self.model.title,
          description_indo: self.model.description_indo,
          content_indo: self.model.content_indo,
          title_indo: self.model.title_indo,
          type: self.model.type,
          category: self.model.category,
          id: self.artikel.id,
        };
        self.isRequets = true;
        self.$store
          .dispatch("editArtikel", data)
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
      this.model.image_file = "";
      this.model.image_name = "";
      this.model.image_url = "";
      this.model.description = "";
      this.model.content = "";
      this.model.title = "";
      this.model.description_indo = "";
      this.model.content_indo = "";
      this.model.title_indo = "";
      this.model.type = "";
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
          this.model.image_file = files[0];
        });
      } else {
        this.model.image_url = "";
        this.model.image_file = "";
        this.model.image_name = "";
      }
    },

    close() {
      this.$emit("cancelEdit", "table");
    },
  },
};
</script>

