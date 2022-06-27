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
                UNIT 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="4">
              <v-select
                @change="$v.model.unit.$touch()"
                @blur="$v.model.unit.$touch()"
                :error-messages="unitError"
                v-model="model.unit"
                :items="units"
                label="Unit"
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
            <v-col cols="12" xs="12" md="4">
              <v-text-field
                @input="$v.model.nama.$touch()"
                @blur="$v.model.nama.$touch()"
                :error-messages="namaError"
                v-model="model.nama"
                label="Nama"
                required
              >
              </v-text-field>
            </v-col>

            <!--======================================================================================
                KODE 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="4">
              <v-text-field
                @input="$v.model.kode.$touch()"
                @blur="$v.model.kode.$touch()"
                :error-messages="kodeError"
                v-model="model.kode"
                label="Kode"
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

export default {
  props: { divisi: {} },
  data() {
    return {
      model: {
        nama: this.divisi.nama ?? "",
        kode: this.divisi.kode ?? "",
        unit: parseInt(this.divisi.unit_id ?? ""),
      },
      units: [],
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      nama: { required },
      kode: { required },
      unit: { required },
    },
  },

  beforeMount() {
    this.getUnits();
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

    kodeError() {
      const errors = [];
      if (!this.$v.model.kode.$dirty) return errors;
      !this.$v.model.kode.required && errors.push("Kode harus diisi");
      return errors;
    },

    unitError() {
      const errors = [];
      if (!this.$v.model.unit.$dirty) return errors;
      !this.$v.model.unit.required && errors.push("Unit harus diisi");
      return errors;
    },
  },

  methods: {
    getUnits() {
      let self = this;

      self.$store.dispatch("getUnit").then((response) => {
        self.units = response.data;
      });
    },

    save(content) {
      let self = this;
      self.$v.$touch();

      if (!self.isRequest && self.isValid) {
        const data = {
          nama: self.model.nama,
          kode: self.model.kode,
          unit_id: self.model.unit,
          id: self.divisi.id,
        };
        self.isRequest = true;
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

