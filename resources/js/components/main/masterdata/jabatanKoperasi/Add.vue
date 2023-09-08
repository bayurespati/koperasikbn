<template>
    <div>
        <v-card>
            <v-card-title>
                <span class="title">Create</span>
            </v-card-title>
            <v-form v-model="valid">
                <v-container>
                    <v-row>
                        <!--=========================================================================================
                IS ACTIVE 
            ==========================================================================================-->
                        <v-col cols="12" xs="12" md="12">
                            <v-checkbox
                                v-model="model.is_custom"
                                label="is custom"
                            ></v-checkbox>
                        </v-col>

                        <!--======================================================================================
                NAMA JABATAN
            ==========================================================================================-->
                        <v-col cols="12" xs="12" md="6">
                            <v-text-field
                                @input="$v.model.nama.$touch()"
                                @blur="$v.model.nama.$touch()"
                                :error-messages="namaError"
                                v-model="model.nama"
                                label="Nama jabatan"
                                required
                            >
                            </v-text-field>
                        </v-col>

                        <!--======================================================================================
                NAMA PEJABAT
            ==========================================================================================-->
                        <v-col cols="12" xs="12" md="6" v-if="model.is_custom">
                            <v-text-field
                                @input="$v.model.user_name.$touch()"
                                @blur="$v.model.user_name.$touch()"
                                :error-messages="namaError"
                                v-model="model.user_name"
                                label="Nama Penjabat"
                                required
                            >
                            </v-text-field>
                        </v-col>

                        <!--======================================================================================
                  USER 
              ==========================================================================================-->
                        <v-col cols="12" xs="12" md="6" v-if="!model.is_custom">
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
                SHOW IMAGE 
            ==========================================================================================-->
                        <v-col
                            cols="12"
                            v-if="model.is_custom && model.image_url"
                        >
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
                        <v-col cols="12" xs="12" md="12" v-if="model.is_custom">
                            <v-text-field
                                @input="$v.model.image_name.$touch()"
                                @blur="$v.model.image_name.$touch()"
                                :error-messages="imageError"
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
                            <v-btn
                                rounded
                                color="error"
                                class="ml-3"
                                @click="close()"
                            >
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
                is_custom: false,
                image_name: "",
                image_file: null,
                image_url: "",
                user_name: "",
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
            user_name: { required },
            image_name: { required },
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
            if (this.model.is_custom) {
                return (
                    this.userNameError.length == 0 &&
                    this.namaError.length == 0 &&
                    this.imageError.length == 0
                );
            }
            return this.namaError.length == 0;
        },

        imageError() {
            const errors = [];
            if (!this.$v.model.image_name.$dirty) return errors;
            !this.$v.model.image_name.required &&
                errors.push("Gambar harus diisi.");
            return errors;
        },

        namaError() {
            const errors = [];
            if (!this.$v.model.nama.$dirty) return errors;
            !this.$v.model.nama.required &&
                errors.push("Nama jabatan harus diisi.");
            return errors;
        },

        userNameError() {
            const errors = [];
            if (!this.$v.model.user_name.$dirty) return errors;
            !this.$v.model.user_name.required &&
                errors.push("Nama Pejabat harus diisi.");
            return errors;
        },
    },

    methods: {
        save(content) {
            this.$v.$touch();
            let self = this;
            console.log(
                self.isValid,
                this.userNameError.length == 0,
                this.namaError.length == 0,
                this.imageError.length == 0
            );
            if (!self.isRequest && self.isValid) {
                const data = {
                    nama: self.model.nama,
                    user_id: self.model.user,
                    user_name: self.model.user_name,
                    is_custom: self.model.is_custom,
                    image_name: self.model.image_name,
                    image_file: self.model.image_url,
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

        search(e) {
            if (!this.searchTerm) {
                this.users = this.usersCopy;
            }

            this.users = this.usersCopy.filter((user) => {
                return (
                    user.nama
                        .toLowerCase()
                        .indexOf(this.searchTerm.toLowerCase()) > -1
                );
            });
        },

        clearForm() {
            this.$v.$reset();
            this.model.nama = "";
            this.model.image_file = "";
            this.model.image_name = "";
            this.model.image_url = "";
            this.model.user_name = "";
            this.model.is_custom = "";
        },

        close() {
            this.$emit("cancelAdd", "table");
        },
    },
};
</script>
