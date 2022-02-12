<template>
  <v-card class="mb-8">
    <v-card-title>
      <span>
        Add Image
        <span class="font-weight-bold"> "{{ event.title }}" </span>
      </span>
    </v-card-title>
    <v-form v-model="valid">
      <v-container>
        <v-row>
          <!--=========================================================================================
              SHOW IMAGE
          ==========================================================================================-->
          <v-expand-transition>
            <v-col cols="12" md="12" v-if="model.image_url">
              <v-img
                :src="model.image_url"
                max-height="200"
                contain
                aspect-ratio="1.7"
              ></v-img>
            </v-col>
          </v-expand-transition>

          <!--=========================================================================================
              IMAGE INPUT
          ==========================================================================================-->
          <v-col cols="12" xs="12" md="6">
            <v-text-field
              @input="$v.model.image_file.$touch()"
              @blur="$v.model.image_file.$touch()"
              :error-messages="imageError"
              v-model="model.image_name"
              prepend-icon="mdi-camera"
              @click="pickFile"
              label="Gambar"
            ></v-text-field>
            <input
              @change="onFilePicked"
              style="display: none"
              ref="imageUpload"
              accept="image/*"
              type="file"
            />
          </v-col>

          <!--=========================================================================================
              NAME
          ==========================================================================================-->
          <v-col cols="12" xs="12" md="6">
            <v-text-field
              @input="$v.model.name.$touch()"
              @blur="$v.model.name.$touch()"
              :error-messages="nameError"
              v-model="model.name"
              label="Name"
              required
            ></v-text-field>
          </v-col>

          <!--=========================================================================================
              BUTTON
          ==========================================================================================-->
          <v-col cols="12 text-left">
            <v-btn rounded color="success" :loading="isRequest" @click="save()">
              save
            </v-btn>
            <v-btn rounded color="error" class="ml-3" @click="close()">
              close
            </v-btn>
          </v-col>
        </v-row>
      </v-container>
    </v-form>
  </v-card>
</template>

<script>
import { required } from "vuelidate/lib/validators";

export default {
  props: {
    event: {},
  },

  data() {
    return {
      model: {
        image_name: "",
        image_file: null,
        image_url: "",
        name: "",
      },

      isRequest: false,
      valid: false,
      alert: true,
    };
  },

  validations: {
    model: {
      image_file: { required },
      name: { required },
    },
  },

  computed: {
    isValid() {
      return this.nameError.length == 0 && this.model.image_file != null;
    },

    imageError() {
      const errors = [];
      if (!this.$v.model.image_file.$dirty) return errors;
      !this.$v.model.image_file.required && errors.push("Image is required.");
      return errors;
    },

    nameError() {
      const errors = [];
      if (!this.$v.model.name.$dirty) return errors;
      !this.$v.model.name.required && errors.push("Name is required.");
      return errors;
    },
  },

  methods: {
    save(content) {
      let self = this;

      this.$v.$touch();

      if (!this.isRequest && this.isValid) {
        const data = {
          image_name: self.model.image_name,
          image_file: self.model.image_url,
          event_id: self.event.id,
          name: self.model.name,
        };

        this.isRequest = true;

        this.$store
          .dispatch("storeEventImage", data)
          .then((response) => {
            self.clearForm();
            flash(response.message);
            self.isRequest = false;
          })
          .catch((errors) => {
            console.log("error");
            Object.keys(errors).forEach((field) => {
              errors[field].forEach((message) => {
                flash(message, "danger", 5000);
              });
            });
            self.isRequest = false;
          });
      }
    },

    clearForm() {
      this.$v.$reset();
      this.model.image_name = "";
      this.model.image_file = null;
      this.model.image_url = "";
      this.model.name = "";
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
      this.clearForm();
      this.$emit("close");
    },
  },
};
</script>