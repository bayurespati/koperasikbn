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
                label="Pertanyan bahasa Indonesia"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
                CATEGORY 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-select
                @change="$v.model.category.$touch()"
                @blur="$v.model.category.$touch()"
                :error-messages="categoryError"
                v-model="model.category"
                :items="categories"
                label="Kategori"
                item-text="nama"
                item-value="nama"
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

  data() {
    return {
      model: {
        link: "",
        category: "",
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
      category: { required },
    },
  },

  computed: {
    isValid() {
      return this.linkError.length == 0 && this.categoryError.length == 0;
    },

    linkError() {
      const errors = [];
      if (!this.$v.model.link.$dirty) return errors;
      !this.$v.model.link.required && errors.push("Link video harus diisi");
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
      this.$v.$touch();
      let self = this;
      if (!self.isRequest && self.isValid) {
        const data = {
          link: self.model.link,
          category: self.model.category,
        };
        self.isRequets = true;
        self.$store
          .dispatch("storeVideo", data)
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
    },

    close() {
      this.$emit("cancelAdd", "table");
    },
  },
};
</script>
