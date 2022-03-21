<template>
  <div>
    <v-card>
      <v-card-title>
        <span class="title">Edit Gambar {{ banner.pos }}</span>
      </v-card-title>
      <v-form v-model="valid">
        <v-container>
          <v-row>
            <!--=========================================================================================
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

            <!--=========================================================================================
                IMAGE INPUT
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-text-field
                @input="$v.model.image_name.$touch()"
                @blur="$v.model.image_name.$touch()"
                :error-messages="imageError"
                v-model="model.image_name"
                label="Image"
                @click="pickFile"
                prepend-icon="mdi-camera"
              ></v-text-field>
              <input
                type="file"
                ref="imageUpload"
                style="display: none"
                accept="image/*"
                @change="onFilePicked"
              />
            </v-col>

            <!--=========================================================================================
                TITLE INDO
            ==========================================================================================-->
            <v-col cols="6" xs="12" md="6">
              <v-text-field
                @input="$v.model.title_indo.$touch()"
                @blur="$v.model.title_indo.$touch()"
                :error-messages="titleIndoError"
                required
                label="Judul indonesia"
                v-model="model.title_indo"
              ></v-text-field>
            </v-col>

            <!--=========================================================================================
                TITLE ENG
            ==========================================================================================-->
            <v-col cols="6" xs="12" md="6">
              <v-text-field
                required
                @input="$v.model.title.$touch()"
                @blur="$v.model.title.$touch()"
                :error-messages="titleError"
                label="Judul ingrris"
                v-model="model.title"
              ></v-text-field>
            </v-col>

            <!--=========================================================================================
                DESCRIPTION INDO
            ==========================================================================================-->
            <v-col cols="6" xs="12" md="6">
              <v-textarea
                @input="$v.model.description_indo.$touch()"
                @blur="$v.model.description_indo.$touch()"
                :error-messages="descriptionIndoError"
                outlined
                required
                name="input-7-4"
                label="Deskripsi indonesia"
                v-model="model.description_indo"
              ></v-textarea>
            </v-col>

            <!--=========================================================================================
                DESCRIPTION ENG
            ==========================================================================================-->
            <v-col cols="6" xs="12" md="6">
              <v-textarea
                @input="$v.model.description.$touch()"
                @blur="$v.model.description.$touch()"
                :error-messages="descriptionError"
                outlined
                required
                name="input-7-4"
                label="Deskripsi inggris"
                v-model="model.description"
              ></v-textarea>
            </v-col>

            <!--=========================================================================================
               BUTTON 1 LINK 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
              <v-text-field
                required
                label="Link tombol 1"
                v-model="model.button_link"
              ></v-text-field>
            </v-col>

            <!--=========================================================================================
                BUTTON 1 TITLE INDO 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
              <v-text-field
                @input="$v.model.button_title_indo.$touch()"
                @blur="$v.model.button_title_indo.$touch()"
                :error-messages="buttonTitleIndoError"
                required
                label="Judul tombol 1 indonesia"
                v-model="model.button_title_indo"
              ></v-text-field>
            </v-col>

            <!--=========================================================================================
                BUTTON 1 TITLE ENG 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
              <v-text-field
                @input="$v.model.button_title.$touch()"
                @blur="$v.model.button_title.$touch()"
                :error-messages="buttonTitleError"
                required
                label="Judul tombol 1 inggris"
                v-model="model.button_title"
              ></v-text-field>
            </v-col>

            <!--=========================================================================================
               BUTTON 2 LINK 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
              <v-text-field
                required
                label="Link tombol 2"
                v-model="model.button_two_link"
              ></v-text-field>
            </v-col>

            <!--=========================================================================================
                BUTTON 2 TITLE INDO 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
              <v-text-field
                @input="$v.model.button_two_title_indo.$touch()"
                @blur="$v.model.button_two_title_indo.$touch()"
                :error-messages="buttonTwoTitleIndoError"
                required
                label="Judul tombol 2 indonesia"
                v-model="model.button_two_title_indo"
              ></v-text-field>
            </v-col>

            <!--=========================================================================================
                BUTTON 2 TITLE ENG 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
              <v-text-field
                @input="$v.model.button_two_title.$touch()"
                @blur="$v.model.button_two_title.$touch()"
                :error-messages="buttonTwoTitleError"
                required
                label="Judul tombol 2 inggris"
                v-model="model.button_two_title"
              ></v-text-field>
            </v-col>

            <!--=========================================================================================
                IS ACTIVE 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-checkbox
                v-model="model.is_active"
                label="is active"
              ></v-checkbox>
            </v-col>

            <!--=========================================================================================
                BUTTON
            ==========================================================================================-->
            <v-col cols="12 text-left">
              <v-btn
                rounded
                color="success"
                :loading="isRequest"
                @click="save()"
                >save
              </v-btn>
              <v-btn rounded color="error" class="ml-3" @click="close()">
                cancel
              </v-btn>
            </v-col>
          </v-row>
        </v-container>
      </v-form>
    </v-card>
  </div>
</template>

<script>
import { required, maxLength, email } from "vuelidate/lib/validators";

export default {
  props: { banner: {} },

  data() {
    return {
      model: {
        image_file: null,
        image_name: this.banner.image_name ?? "",
        image_url: this.banner.image_link ?? "",
        title: this.banner.title ?? "",
        title_indo: this.banner.title_indo ?? "",
        description: this.banner.description ?? "",
        description_indo: this.banner.description_indo ?? "",

        button_link: this.banner.button_link ?? "",
        button_title: this.banner.button_title ?? "",
        button_title_indo: this.banner.button_title_indo ?? "",

        button_two_link: this.banner.button_two_link ?? "",
        button_two_title: this.banner.button_two_title ?? "",
        button_two_title_indo: this.banner.button_two_title_indo ?? "",

        is_active: this.banner.is_active ?? "",
      },

      valid: false,
      isRequest: false,
    };
  },

  validations: {
    model: {
      image_name: { required },
      title: { required, maxLength: maxLength(45) },
      title_indo: { required, maxLength: maxLength(45) },
      description: { required, maxLength: maxLength(130) },
      description_indo: { required, maxLength: maxLength(130) },
      button_title: { maxLength: maxLength(20) },
      button_title_indo: { maxLength: maxLength(20) },
      button_two_title: { maxLength: maxLength(20) },
      button_two_title_indo: { maxLength: maxLength(20) },
    },
  },

  computed: {
    isValid() {
      return this.model.image_name != "";
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
      !this.$v.model.title.maxLength &&
        errors.push("Judul maksimal 45 karakter.");
      !this.$v.model.title.required && errors.push("Judul harus diisi.");
      return errors;
    },

    titleIndoError() {
      const errors = [];
      if (!this.$v.model.title_indo.$dirty) return errors;
      !this.$v.model.title_indo.maxLength &&
        errors.push("Jududl maksimal 45 karakter.");
      !this.$v.model.title_indo.required && errors.push("Judul harus diisi.");
      return errors;
    },

    descriptionError() {
      const errors = [];
      if (!this.$v.model.description.$dirty) return errors;
      !this.$v.model.description.maxLength &&
        errors.push("Deskripsi maksimal 130 karakter.");
      !this.$v.model.description.required &&
        errors.push("Deskripsi harus diisi.");
      return errors;
    },

    descriptionIndoError() {
      const errors = [];
      if (!this.$v.model.description_indo.$dirty) return errors;
      !this.$v.model.description_indo.maxLength &&
        errors.push("Deskripsi maksimal 130 karakter.");
      !this.$v.model.description_indo.required &&
        errors.push("Deskripsi harus diisi.");
      return errors;
    },

    buttonTitleError() {
      const errors = [];
      if (!this.$v.model.button_title.$dirty) return errors;
      !this.$v.model.button_title.maxLength &&
        errors.push("Judul button maksimal 20 karekter.");
      return errors;
    },

    buttonTitleIndoError() {
      const errors = [];
      if (!this.$v.model.button_title_indo.$dirty) return errors;
      !this.$v.model.button_title_indo.maxLength &&
        errors.push("Judul button maksimal 20 karekter.");
      return errors;
    },

    buttonTwoTitleError() {
      const errors = [];
      if (!this.$v.model.button_two_title.$dirty) return errors;
      !this.$v.model.button_two_title.maxLength &&
        errors.push("Judul button ke 2 maksimal 20 karekter.");
      return errors;
    },

    buttonTwoTitleIndoError() {
      const errors = [];
      if (!this.$v.model.button_two_title_indo.$dirty) return errors;
      !this.$v.model.button_two_title_indo.maxLength &&
        errors.push("Judul button ke 2 maksimal 20 karekter.");
      return errors;
    },
  },

  methods: {
    save() {
      let self = this;

      this.$v.$touch();

      if (!this.isRequest && this.isValid) {
        const data = {
          image_name: self.model.image_name,
          image_file: self.model.image_url,
          title: self.model.title,
          title_indo: self.model.title_indo,
          description: self.model.description,
          description_indo: self.model.description_indo,
          button_link: self.model.button_link,
          button_title: self.model.button_title,
          button_title_indo: self.model.button_title_indo,
          button_two_link: self.model.button_two_link,
          button_two_title: self.model.button_two_title,
          button_two_title_indo: self.model.button_two_title_indo,
          is_active: self.model.is_active,
          id: self.banner.id,
        };

        this.isRequest = true;

        axios
          .patch("/dashboard/banners/" + data.id, data)
          .then((response) => {
            flash(response.data);
            self.isRequest = false;
            self.close("success");
          })
          .catch((errors) => {
            Object.keys(errors).forEach((field) => {
              errors[field].forEach((message) => {
                flash(message, "danger", 5000);
              });
            });
            self.isRequest = false;
          });
      }
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

    close(value) {
      this.$emit("cancel", value);
    },
  },
};
</script>

<style scope>
.v-label {
  margin-bottom: 0px !important;
}
</style>