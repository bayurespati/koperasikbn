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
                LINK 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-textarea
                @input="$v.model.link.$touch()"
                @blur="$v.model.link.$touch()"
                :error-messages="linkError"
                v-model="model.link"
                label="Link embed"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
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

  props: { video: {} },

  data() {
    return {
      model: {
        link: this.video.link ?? "",
        title: this.video.title ?? "",
        title_indo: this.video.title_indo ?? "",
        category: this.video.category ?? "",
      },
      categories: [
        { nama: "layanan simpanan" },
        { nama: "layanan pinjaman" },
        { nama: "layanan bisnis" },
        { nama: "layanan komersial" },
      ],
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      link: { required },
      title: { required },
      title_indo: { required },
      category: { required },
    },
  },

  computed: {
    isValid() {
      return (
        this.linkError.length == 0 &&
        this.titleError.length == 0 &&
        this.titleIndoError.length == 0
      );
    },

    linkError() {
      const errors = [];
      if (!this.$v.model.link.$dirty) return errors;
      !this.$v.model.link.required && errors.push("Link video harus diisi");
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
      if (!this.$v.model.category.$dirty) return errors;
      !this.$v.model.category.required && errors.push("Kategory harus dipilih");
      return errors;
    },
  },

  methods: {
    save(content) {
      let self = this;
      self.$v.$touch();

      if (!self.isRequest && self.isValid) {
        const data = {
          link: self.model.link,
          title: self.model.title,
          title_indo: self.model.title_indo,
          id: self.video.id,
        };
        self.isRequest = true;
        self.$store
          .dispatch("editVideo", data)
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
      this.model.link = "";
      this.model.category = "";
      this.model.title = "";
      this.model.title_indo = "";
    },

    close() {
      this.$emit("cancelEdit", "table");
    },
  },
};
</script>
