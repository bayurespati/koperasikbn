<template>
  <div>
    <v-card>
      <v-card-title>
        <span class="title">Edit Gambar {{ kalender.name }}</span>
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
                @input="$v.model.image_file.$touch()"
                @blur="$v.model.image_file.$touch()"
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
import { required } from "vuelidate/lib/validators";

export default {
  props: { kalender: {} },

  data() {
    return {
      model: {
        image_name: this.kalender.image_name ?? "",
        image_url: this.kalender.image_link ?? "",
        image_file: null,
      },

      valid: false,
      isRequest: false,
    };
  },

  validations: {
    model: {
      image_file: { required },
    },
  },

  computed: {
    isValid() {
      return this.model.image_file != null;
    },

    imageError() {
      const errors = [];
      if (!this.$v.model.image_file.$dirty) return errors;
      !this.$v.model.image_file.required &&
        errors.push("Data image belum berubah.");
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
          id: self.kalender.id,
        };

        this.isRequest = true;

        axios
          .patch("/dashboard/kalenders/" + data.id, data)
          .then((response) => {
            self.clearForm();
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

    clearForm() {
      this.$v.$reset();
      this.model.image_name = "";
      this.model.image_url = "";
      this.model.image_file = null;
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