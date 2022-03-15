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
            <v-col cols="12" xs="12" md="6">
              <v-text-field
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
                NAMA 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
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
                NIP 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="4">
              <v-text-field
                @input="$v.model.nip.$touch()"
                @blur="$v.model.nip.$touch()"
                :error-messages="nipError"
                v-model="model.nip"
                label="NIP"
                required
              >
              </v-text-field>
            </v-col>

            <!--======================================================================================
                EMAIL 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="4">
              <v-text-field v-model="model.email" label="Email" required>
              </v-text-field>
            </v-col>

            <!--======================================================================================
                PHONE 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="4">
              <v-text-field v-model="model.phone" label="Phone"> </v-text-field>
            </v-col>

            <!--======================================================================================
                ROLE 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
              <v-select
                @change="$v.model.role.$touch()"
                @blur="$v.model.role.$touch()"
                :error-messages="roleError"
                v-model="model.role"
                :items="roles"
                label="Role"
                item-text="name"
                item-value="id"
                persistent-hint
                required
                small-chips
              ></v-select>
            </v-col>

            <!--======================================================================================
                UNIT 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
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
                DIVISI
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
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
               Jabatan KBN 
            ==========================================================================================-->
            <v-col cols="4" xs="12" md="4">
              <v-select
                v-model="model.jabatan_kbn"
                :items="jabatanKbns"
                label="Jabatan"
                item-text="nama"
                item-value="id"
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
import { VueEditor } from "vue2-editor";

export default {
  components: {
    VueEditor,
  },
  props: { user: {} },

  data() {
    return {
      model: {
        image_name:
          this.user.image_name == undefined ? "" : this.user.image_name,
        image_file: null,
        image_url:
          this.user.image_link == undefined ? "" : this.user.image_link,
        nama: this.user.nama == undefined ? "" : this.user.nama,
        nip: this.user.nip == undefined ? "" : this.user.nip,
        email: this.user.email == undefined ? "" : this.user.email,
        phone: this.user.phone == undefined ? "" : this.user.phone,
        role: this.user.role_id == undefined ? "" : this.user.role_id,
        unit: this.user.divisi == undefined ? "" : this.user.divisi.unit.id,
        divisi: this.user.divisi_id == undefined ? "" : this.user.divisi_id,
        jabatan_kbn:
          this.user.jabatan_kbn_id == undefined ? "" : this.user.jabatan_kbn_id,
      },
      roles: [],
      divisis: [],
      units: [],
      jabatanKbns: [],
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      nama: { required },
      nip: { required },
      email: { required },
      role: { required },
      unit: { required },
      divisi: { required },
    },
  },

  computed: {
    isValid() {
      return (
        this.namaError.length == 0 &&
        this.nipError.length == 0 &&
        this.unitError.length == 0 &&
        this.divisiError.length == 0 &&
        this.roleError.length == 0
      );
    },

    namaError() {
      const errors = [];
      if (!this.$v.model.nama.$dirty) return errors;
      !this.$v.model.nama.required && errors.push("Nama harus diisi.");
      return errors;
    },

    nipError() {
      const errors = [];
      if (!this.$v.model.nip.$dirty) return errors;
      !this.$v.model.nip.required && errors.push("NIP harus diisi.");
      return errors;
    },

    roleError() {
      const errors = [];
      if (!this.$v.model.role.$dirty) return errors;
      !this.$v.model.role.required && errors.push("Role harus diisi.");
      return errors;
    },

    unitError() {
      const errors = [];
      if (!this.$v.model.unit.$dirty) return errors;
      !this.$v.model.unit.required && errors.push("Unit harus diisi.");
      return errors;
    },

    divisiError() {
      const errors = [];
      if (!this.$v.model.divisi.$dirty) return errors;
      !this.$v.model.divisi.required && errors.push("Divisi harus diisi.");
      return errors;
    },
  },

  beforeMount() {
    this.getRoles();
    this.getUnits();
    this.getJabatanKbn();
    this.getDivisis();
  },

  watch: {
    "model.unit": function () {
      this.getDivisis();
      this.model.divisi = "";
    },
  },

  methods: {
    getRoles() {
      let self = this;

      self.$store.dispatch("getRoles").then((response) => {
        self.roles = response.data;
      });
    },

    getUnits() {
      let self = this;

      self.$store.dispatch("getUnit").then((response) => {
        self.units = response.data;
      });
    },

    getJabatanKbn() {
      let self = this;

      self.$store.dispatch("getJabatanKbn").then((response) => {
        self.jabatanKbns = response.data;
      });
    },

    getDivisis() {
      let self = this;
      const data = {
        unit_id: self.model.unit,
      };

      self.$store.dispatch("getDivisiByUnit", data).then((response) => {
        self.divisis = response.data;
      });
    },

    save(content) {
      this.$v.$touch();
      let self = this;
      if (!self.isRequest && self.isValid) {
        const data = {
          image_name: self.model.image_name,
          image_file: self.model.image_url,
          nama: self.model.nama,
          email: self.model.email,
          phone: self.model.phone,
          role_id: self.model.role,
          nip: self.model.nip,
          divisi_id: self.model.divisi,
          jabatan_kbn_id: self.model.jabatan_kbn,
          id: self.user.id,
        };
        self.isRequets = true;
        self.$store
          .dispatch("editUser", data)
          .then((response) => {
            self.clearForm();
            flash(response.message);
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
      this.model.nama = "";
      this.model.nip = "";
      this.model.role = "";
      this.model.phone = "";
      this.model.email = "";
      this.model.divisi = "";
      this.model.unit = "";
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
