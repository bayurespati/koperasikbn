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
                  USER 
              ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <!-- <v-select
                @input="search"
                v-model="model.user"
                :items="users"
                label="Pejabat"
                item-text="nama"
                item-value="id"
                persistent-hint
                required
                small-chips
              ></v-select> -->
              <v-select
                v-model="model.user"
                :items="users"
                item-text="nama"
                item-value="id"
                attach
                label="Cari"
              >
                <template v-slot:prepend-item>
                  <v-list-item>
                    <v-list-item-content>
                      <v-text-field
                        v-model="searchTerm"
                        placeholder="Search"
                        @input="search"
                      ></v-text-field>
                    </v-list-item-content>
                  </v-list-item>
                  <v-divider class="mt-2"></v-divider>
                </template>
              </v-select>
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
import { mapGetters } from "vuex";

export default {
  data() {
    return {
      model: {
        nama: "",
        user: "",
      },
      searchTerm: "",
      valid: false,
      isRequest: false,
      alert: true,
      users: [],
      usersCopy: [],
    };
  },

  validations: {
    model: {
      nama: { required },
    },
  },

  mounted() {
    this.users = this.getusers;
    this.usersCopy = [...this.users];
  },

  computed: {
    ...mapGetters({
      getusers: "users",
    }),

    isValid() {
      return this.namaError.length == 0;
    },

    namaError() {
      const errors = [];
      if (!this.$v.model.nama.$dirty) return errors;
      !this.$v.model.nama.required && errors.push("Nama harus diisi.");
      return errors;
    },
  },

  methods: {
    save(content) {
      this.$v.$touch();
      let self = this;
      if (!self.isRequest && self.isValid) {
        const data = {
          nama: self.model.nama,
          user_id: self.model.user,
        };
        self.isRequest = true;
        self.$store
          .dispatch("storeJabatanKoperasi", data)
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

    search(e) {
      if (!this.searchTerm) {
        this.users = this.usersCopy;
      }
      // console.log(this.searchTerm);
      this.users = this.usersCopy.filter((user) => {
        console.log(user);
        return (
          user.nama.toLowerCase().indexOf(this.searchTerm.toLowerCase()) > -1
        );
      });
    },

    searchFruits(e) {
      if (!this.searchTerm) {
        this.fruits = this.fruitsCopy;
      }

      this.fruits = this.fruitsCopy.filter((fruit) => {
        console.log(this.searchTerm.toLowerCase());
        // return fruit.toLowerCase().indexOf(this.searchTerm.toLowerCase()) > -1;
      });
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
