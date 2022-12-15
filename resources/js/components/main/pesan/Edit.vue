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
            <v-col cols="12" xs="12" md="6">
              <v-text-field v-model="model.nama" label="Nama" disabled>
              </v-text-field>
            </v-col>

            <!--======================================================================================
                TELEPONE 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-text-field v-model="model.telepone" label="Telepone" disabled>
              </v-text-field>
            </v-col>

            <!--======================================================================================
                LAYANAN
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-text-field v-model="model.layanan" label="Layanan" disabled>
              </v-text-field>
            </v-col>

            <!--======================================================================================
                PERTANYAAN 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-textarea
                v-model="model.pertanyaan"
                label="Pertanyaan"
                name="input-7-4"
                disabled
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
               STATUS 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-select
                v-model="model.status"
                :items="statuses"
                label="Status"
                item-text="nama"
                item-value="id"
                persistent-hint
                required
                small-chips
              ></v-select>
            </v-col>

            <!--======================================================================================
                REMARK 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-textarea
                @input="$v.model.remark.$touch()"
                @blur="$v.model.remark.$touch()"
                :error-messages="remarkError"
                v-model="model.remark"
                label="Remark"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
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

  props: { pesan: {} },

  data() {
    return {
      model: {
        nama: this.pesan.nama ?? "",
        layanan: this.pesan.layanan ?? "",
        telepone: this.pesan.telepone ?? "",
        pertanyaan: this.pesan.pertanyaan ?? "",
        status: this.pesan.status ?? "",
        remark: this.pesan.remark ?? "",
      },
      valid: false,
      isRequest: false,
      alert: true,
      statuses: [
        {
          nama: "Diterima",
          id: "1",
        },
        {
          nama: "Penanya tidak dapat di hubungi",
          id: "2",
        },
        {
          nama: "Penanya sudah di hubungi",
          id: "3",
        },
        {
          nama: "Pertanyaan sudah dijawab",
          id: "4",
        },
      ],
    };
  },

  validations: {
    model: {
      status: { required },
      remark: { required },
    },
  },

  computed: {
    isValid() {
      if (this.model.status == 3 || this.model.status == 4) {
        return this.remarkError.length == 0 && this.statusError.length == 0;
      } else {
        return this.statusError.length == 0;
      }
    },

    statusError() {
      const errors = [];
      if (!this.$v.model.status.$dirty) return errors;
      !this.$v.model.status.required && errors.push("Status harus diisi");
      return errors;
    },

    remarkError() {
      const errors = [];
      if (!this.$v.model.remark.$dirty) return errors;
      !this.$v.model.remark.required && errors.push("Remark harus diisi");
      return errors;
    },
  },

  methods: {
    save(content) {
      let self = this;
      self.$v.$touch();

      if (!self.isRequest && self.isValid) {
        const data = {
          remark: self.model.remark,
          status: self.model.status,
          id: self.pesan.id,
        };
        self.isRequest = true;
        self.$store
          .dispatch("editPesan", data)
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

    pickFile() {
      this.$refs.fileUpload.click();
    },

    onFilePicked(e) {
      let files = null;
      files = e.target.files;

      if (files[0] !== undefined) {
        this.model.file_name = files[0].name;

        if (this.model.file_name.lastIndexOf(".") <= 0) {
          return;
        }

        const fr = new FileReader();

        fr.readAsDataURL(files[0]);

        fr.addEventListener("load", () => {
          this.model.file_file = fr.result;
        });
      }
    },

    clearForm() {
      this.$v.$reset();
      this.model.title = "";
      this.model.title_indo = "";
      this.model.description = "";
      this.model.description_indo = "";
      this.model.file_name = "";
      this.model.file_file = "";
    },

    close() {
      this.$emit("cancelEdit", "table");
    },
  },
};
</script>

