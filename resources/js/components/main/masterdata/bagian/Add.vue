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
                Divisi 
            ==========================================================================================-->
            <v-col cols="6" xs="12" md="6">
              <v-select
                @change="$v.model.divisi.$touch()"
                @blur="$v.model.divisi.$touch()"
                :error-messages="divisiError"
                v-model="model.divisi"
                :items="divisis"
                label="Divisi"
                item-text="nama"
                item-value="id"
                persistent-hint
                required
                small-chips
              ></v-select>
            </v-col>

            <!--======================================================================================
                NAMA
            ==========================================================================================-->
            <v-col cols="6" xs="12" md="6">
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
  data() {
    return {
      model: {
        nama: "",
        divisi: "",
      },
      divisis: [],
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      nama: { required },
      divisi: { required },
    },
  },

  beforeMount() {
    this.getDivisis();
  },

  computed: {
    isValid() {
      return this.namaError.length == 0 && this.model.divisis != "";
    },

    namaError() {
      const errors = [];
      if (!this.$v.model.nama.$dirty) return errors;
      !this.$v.model.nama.required && errors.push("Nama harus diisi.");
      return errors;
    },

    divisiError() {
      const errors = [];
      if (!this.$v.model.divisi.$dirty) return errors;
      !this.$v.model.divisi.required && errors.push("Divisi diisi.");
      return errors;
    },
  },

  methods: {
    getDivisis() {
      let self = this;

      this.$store
        .dispatch("getDivisi")
        .then((response) => {
          self.divisis = response.data;
        })
        .catch((errors) => {});
    },

    save(content) {
      this.$v.$touch();
      let self = this;
      if (!self.isRequest && self.isValid) {
        const data = {
          nama: self.model.nama,
          divisi_id: self.model.divisi,
        };
        self.isRequets = true;
        self.$store
          .dispatch("storeBagian", data)
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
      this.$emit("cancelAdd", "table");
    },
  },
};
</script>
