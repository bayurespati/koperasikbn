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
                NAMA
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-text-field
                @input="$v.model.nama.$touch()"
                @blur="$v.model.nama.$touch()"
                :error-messages="namaError"
                v-model="model.nama"
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
  props: { divisi: {} },
  data() {
    return {
      model: {
        nama: this.divisi.nama == undefined ? "" : this.divisi.nama,
      },
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      nama: { required },
    },
  },

  computed: {
    isValid() {
      return this.namaError.length == 0;
    },

    namaError() {
      const errors = [];
      if (!this.$v.model.nama.$dirty) return errors;
      !this.$v.model.nama.required && errors.push("Nama harus diisi");
      return errors;
    },
  },

  methods: {
    save(content) {
      let self = this;
      self.$v.$touch();

      if (!self.isRequest && self.isValid) {
        const data = {
          nama: self.model.nama,
          id: self.divisi.id,
        };
        self.isRequets = true;
        self.$store
          .dispatch("editDivisi", data)
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
      this.model.nama = "";
    },

    close() {
      this.$emit("cancelEdit", "table");
    },
  },
};
</script>

