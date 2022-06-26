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
                NAME
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-text-field
                @input="$v.model.name.$touch()"
                @blur="$v.model.name.$touch()"
                :error-messages="nameError"
                v-model="model.name"
                label="Nama"
                required
              >
              </v-text-field>

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
  props: { tag: {} },
  data() {
    return {
      model: {
        name: this.tag.name ?? "",
      },
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      name: { required },
    },
  },

  computed: {
    isValid() {
      return this.nameError.length == 0;
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
      self.$v.$touch();

      if (!self.isRequest && self.isValid) {
        const data = {
          name: self.model.name,
          id: self.tag.id,
        };
        self.isRequest = true;
        self.$store
          .dispatch("editTag", data)
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
      this.model.name = "";
    },

    close() {
      this.$emit("cancelEdit", "table");
    },
  },
};
</script>
