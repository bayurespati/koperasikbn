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
                            USER 
                        ==========================================================================================-->
                        <v-col cols="12" xs="12" md="6">
                            <v-text-field
                                v-model="model.nama"
                                label="Pengaju"
                                disabled
                            ></v-text-field>
                        </v-col>

                        <!--======================================================================================
                            TIPE PENGAJUAN 
                        ==========================================================================================-->
                        <v-col cols="12" xs="12" md="6">
                            <v-text-field
                                v-model="model.pengajuan"
                                label="Tipe layanan"
                                disabled
                            >
                            </v-text-field>
                        </v-col>

                        <!--======================================================================================
                            TANGGAL PENGAJUAN 
                        ==========================================================================================-->
                        <v-col cols="12" xs="12" md="6">
                            <v-text-field
                                v-model="model.tanggal_pengajuan"
                                label="Tanggal"
                                disabled
                            >
                            </v-text-field>
                        </v-col>

                        <!--======================================================================================
                            NOMINAL
                        ==========================================================================================-->
                        <v-col cols="12" xs="12" md="6">
                            <v-text-field
                                v-model="model.nominal"
                                label="Nonimal"
                                disabled
                            >
                            </v-text-field>
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
                                :disabled="
                                    permintaan.status == 4 ||
                                    permintaan.status == `4` ||
                                    permintaan.status == 3 ||
                                    permintaan.status == `3`
                                "
                            ></v-select>
                        </v-col>

                        <!--======================================================================================
                            KETERANGAN 
                        ==========================================================================================-->
                        <v-col
                            cols="12"
                            xs="12"
                            md="12"
                            v-if="model.status == 3"
                        >
                            <v-textarea
                                @input="$v.model.keterangan.$touch()"
                                @blur="$v.model.keterangan.$touch()"
                                :error-messages="keteranganError"
                                v-model="model.keterangan"
                                label="Keterangan"
                                name="input-7-4"
                                required
                                outlined
                            >
                            </v-textarea>
                        </v-col>

                        <!--======================================================================================
                            FILE UPLOAD 
                        ==========================================================================================-->
                        <v-col
                            cols="12"
                            xs="12"
                            md="12"
                            v-if="model.dokumen_1 == '' && model.status == 4"
                        >
                            <v-text-field
                                @input="$v.model.dokumen_1_name.$touch()"
                                @blur="$v.model.dokumen_1_name.$touch()"
                                :error-messages="dokumen1Error"
                                small-chips
                                v-model="model.dokumen_1_name"
                                @click="pickFile"
                                label="File"
                            ></v-text-field>
                            <input
                                type="file"
                                ref="fileUpload"
                                style="display: none"
                                accept="/*"
                                @change="onFilePicked"
                            />
                        </v-col>

                        <v-col
                            cols="12"
                            xs="12"
                            md="6"
                            v-if="model.dokumen_1 != ''"
                        >
                            <button
                                @click.prevent="
                                    download(
                                        model.dokumen_1,
                                        model.dokumen_1_name
                                    )
                                "
                            >
                                {{ model.dokumen_1_name }}
                            </button>
                        </v-col>

                        <v-col
                            cols="12"
                            xs="12"
                            md="6"
                            v-if="model.dokumen_2 != ''"
                        >
                            <button
                                @click.prevent="
                                    download(
                                        model.dokumen_2,
                                        model.dokumen_2_name
                                    )
                                "
                            >
                                {{ model.dokumen_2_name }}
                            </button>
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
                            >
                                save
                            </v-btn>
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

            <!--======================================================================================
                MODAL
            ==========================================================================================-->
            <v-dialog v-model="dialog" class="text-center" max-width="500px">
                <v-card class="text-center pb-0">
                    <v-card-text class="pb-0">
                        <v-container>
                            <v-row>
                                <v-col cols="12" class="text-center mb-0">
                                    <v-text-field
                                        v-if="
                                            permintaan.jenis_pengajuan_id ==
                                                2 ||
                                            permintaan.jenis_pengajuan_id == 4
                                        "
                                        outlined
                                        @input="
                                            $v.model.nilai_angsuran.$touch()
                                        "
                                        @blur="$v.model.nilai_angsuran.$touch()"
                                        :error-messages="nilaiAngsuranError"
                                        v-model="model.nilai_angsuran"
                                        required
                                        class="
                                            text--danger-3
                                            mt-3
                                            text-xs-center
                                        "
                                        label="Nilai Angsuran"
                                        type="number"
                                    ></v-text-field>
                                    <v-text-field
                                        outlined
                                        color="red"
                                        v-model="key_word"
                                        class="
                                            text--danger-3
                                            mt-3
                                            text-xs-center
                                        "
                                        label="ketik 'SETUJU' untuk melajutkan"
                                    ></v-text-field>
                                    <v-btn
                                        sm
                                        outlined
                                        color="success"
                                        text
                                        @click="save()"
                                    >
                                        Save
                                    </v-btn>
                                    <v-btn
                                        sm
                                        outlined
                                        color="error"
                                        text
                                        @click="dialog = false"
                                    >
                                        Cancel
                                    </v-btn>
                                </v-col>
                            </v-row>
                        </v-container>
                    </v-card-text>
                </v-card>
            </v-dialog>
        </v-card>
    </div>
</template>
<script>
import { required } from "vuelidate/lib/validators";
import { VueEditor } from "vue2-editor";
import Axios from "axios";

export default {
    components: {
        VueEditor,
    },

    props: { permintaan: {} },

    data() {
        return {
            model: {
                dokumen_1_name: this.permintaan.dokumen_1_name ?? "",
                dokumen_1: this.permintaan.dokumen_1 ?? "",
                dokumen_2_name: this.permintaan.dokumen_2_name ?? "",
                dokumen_2: this.permintaan.dokumen_2 ?? "",
                nama: this.permintaan.user.nama ?? "",
                pengajuan: this.permintaan.pengajuan.nama ?? "",
                nominal: this.permintaan.nominal_format ?? "",
                tanggal_pengajuan: this.permintaan.tanggal_pengajuan ?? "",
                status: this.permintaan.status ?? "",
                is_online: this.permintaan.is_online ?? "",
                jenis_pengajuan_id: this.permintaan.jenis_pengajuan_id ?? "",
                nilai_angsuran: this.permintaan.nilai_angsuran ?? "",
            },
            valid: false,
            isRequest: false,
            alert: true,
            dialog: false,
            key_word: "",
            statuses: [
                {
                    nama: "Diajukan",
                    id: "1",
                },
                {
                    nama: "Diproses",
                    id: "2",
                },
                {
                    nama: "Ditolak",
                    id: "3",
                },
                {
                    nama: "Disetujui",
                    id: "4",
                },
            ],
        };
    },

    validations: {
        model: {
            keterangan: { required },
            dokumen_1_name: { required },
            nilai_angsuran: { required },
        },
    },

    computed: {
        isValid() {
            if (this.model.status == 3) {
                return this.keteranganError.length == 0;
            }
            if (!this.model.is_online && this.model.status == 4) {
                return (
                    this.model.dokumen_1_name != "" 
                    && (this.permintaan.jenis_pengajuan_id == 2 ||  this.permintaan.jenis_pengajuan_id == 4 ? this.model.nilai_angsuran != "" : true)
                );
            }
            return true;
        },

        dokumen1Error() {
            const errors = [];
            if (!this.$v.model.dokumen_1_name.$dirty) return errors;
            !this.$v.model.dokumen_1_name.required &&
                errors.push("File harus diisi.");
            return errors;
        },

        keteranganError() {
            const errors = [];
            if (!this.$v.model.keterangan.$dirty) return errors;
            !this.$v.model.keterangan.required &&
                errors.push("Deskripsi harus diisi.");
            return errors;
        },

        nilaiAngsuranError() {
            const errors = [];
            if (!this.$v.model.nilai_angsuran.$dirty) return errors;
            !this.$v.model.nilai_angsuran.required &&
                errors.push("Nilai Angsuran harus diisi");
            return errors;
        },
    },

    methods: {
        save(content) {
            let self = this;
            self.$v.$touch();

            if (self.model.status == 4) self.dialog = true;

            if (!self.isRequest && self.isValid) {
                let temp = true;

                if (self.model.status == 4) {
                    temp = this.key_word == "SETUJU";
                }

                if (temp) {
                    const data = {
                        keterangan: self.model.keterangan,
                        dokumen_1: self.model.dokumen_1,
                        dokumen_1_name: self.model.dokumen_1_name,
                        status: self.model.status,
                        is_online: self.model.is_online,
                        nilai_angsuran: self.model.nilai_angsuran,
                        id: self.permintaan.id,
                    };
                    self.isRequest = true;
                    self.$store
                        .dispatch("editPermintaan", data)
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
            }
        },

        download(url, label) {
            Axios.get(url, { responseType: "blob" })
                .then((response) => {
                    const blob = new Blob([response.data], {
                        type: "application/*",
                    });
                    const link = document.createElement("a");
                    link.href = URL.createObjectURL(blob);
                    link.download = label;
                    link.click();
                    URL.revokeObjectURL(link.href);
                })
                .catch(console.error);
        },

        pickFile() {
            this.$refs.fileUpload.click();
        },

        onFilePicked(e) {
            let files = null;
            files = e.target.files;

            if (files[0] !== undefined) {
                this.model.dokumen_1_name = files[0].name;

                if (this.model.dokumen_1_name.lastIndexOf(".") <= 0) {
                    return;
                }

                const fr = new FileReader();

                fr.readAsDataURL(files[0]);

                fr.addEventListener("load", () => {
                    this.model.dokumen_1 = fr.result;
                });
            }
        },

        clearForm() {
            this.$v.$reset();
            this.model.keterangan = "";
            this.model.dokumen_1 = "";
            this.model.dokumen_1_name = "";
        },

        close() {
            this.$emit("cancelEdit", "table");
        },
    },
};
</script>
