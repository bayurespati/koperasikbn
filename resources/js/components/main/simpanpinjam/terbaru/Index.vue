<template>
    <v-main>
        <v-container fluid>
            <v-row>
                <v-col cols="12">
                    <div class="base-title">
                        <h2>Simpan Pinjam Terbaru</h2>
                        <p class="color-sub-title">
                            kelola simpan pinjam terbaru
                        </p>
                    </div>

                    <!--======================================================================================
                        UPLOAD  
                    ==========================================================================================-->
                    <v-card>
                        <v-row class="p-2 mb-6 mt-2">
                            <v-col cols="12" xs="12" md="12">
                                <v-text-field
                                    small-chips
                                    v-model="model.file_name"
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

                            <!--======================================================================================
                                BUTTON 
                            ==========================================================================================-->
                            <v-col cols="12" xs="12" md="6" class="pt-0">
                                <v-btn
                                    rounded
                                    small
                                    color="success"
                                    @click="save()"
                                    :disabled="isRequest"
                                >
                                    {{
                                        isRequest
                                            ? "File sedang diupload mohon tunggu"
                                            : "UPLOAD"
                                    }}
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-card>

                    <!--======================================================================================
                        DOWNLOAD  
                    ==========================================================================================-->
                    <v-card>
                        <v-row class="p-2 mb-6 mt-2">
                            <v-col cols="4" xs="4" md="4">
                                <v-select
                                    v-model="model.jenis"
                                    :items="jenis"
                                    label="Status"
                                    item-text="nama"
                                    item-value="id"
                                    persistent-hint
                                    required
                                    small-chips
                                ></v-select>
                            </v-col>

                            <!--======================================================================================
                                PERIODE 
                            ==========================================================================================-->
                            <v-col cols="4" xs="4" md="4">
                                <v-menu
                                    ref="menu"
                                    :close-on-content-click="false"
                                    :return-value.sync="model.periode"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                            v-model="model.periode"
                                            label="Periode Laporan"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker
                                        v-model="model.periode"
                                        no-title
                                        scrollable
                                        type="month"
                                    >
                                        <v-spacer></v-spacer>
                                        <v-btn
                                            text
                                            color="primary"
                                            @click="menu = false"
                                        >
                                            Cancel
                                        </v-btn>
                                        <v-btn
                                            @click="
                                                $refs.menu.save(model.periode)
                                            "
                                            color="primary"
                                            text
                                            >OK
                                        </v-btn>
                                    </v-date-picker>
                                </v-menu>
                            </v-col>

                            <!--======================================================================================
                                TANGGAL 
                            ==========================================================================================-->
                            <v-col cols="4" xs="4" md="4">
                                <v-menu
                                    ref="menus"
                                    :close-on-content-click="false"
                                    :return-value.sync="model.tanggal"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                                >
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-text-field
                                            v-model="model.tanggal"
                                            label="Tanggal TTD"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker
                                        v-model="model.tanggal"
                                        no-title
                                        scrollable
                                    >
                                        <v-spacer></v-spacer>
                                        <v-btn
                                            text
                                            color="primary"
                                            @click="menus = false"
                                        >
                                            Cancel
                                        </v-btn>
                                        <v-btn
                                            @click="
                                                $refs.menus.save(model.tanggal)
                                            "
                                            color="primary"
                                            text
                                        >
                                            OK
                                        </v-btn>
                                    </v-date-picker>
                                </v-menu>
                            </v-col>

                            <!--======================================================================================
                                BUTTON 
                            ==========================================================================================-->
                            <v-col cols="12" xs="12" md="6" class="pt-0">
                                <v-btn
                                    rounded
                                    small
                                    color="success"
                                    @click="download()"
                                    :disabled="isRequest"
                                >
                                    {{
                                        isRequest
                                            ? "File sedang di download mohon tunggu"
                                            : "DOWNLOADS"
                                    }}
                                </v-btn>
                            </v-col>
                        </v-row>
                    </v-card>
                    <transition name="fade-transition">
                        <list
                            v-if="status === 'table'"
                            @showEdit="showEdit($event)"
                            @changeStatus="changeStatus($event)"
                        ></list>
                        <add
                            v-if="status === 'add'"
                            @cancelAdd="changeStatus($event)"
                        ></add>
                        <edit
                            v-if="status === 'edit'"
                            @cancelEdit="changeStatus($event)"
                            :user="user"
                        ></edit>
                    </transition>
                </v-col>
            </v-row>
        </v-container>
    </v-main>
</template>

<script>
import List from "./Table.vue";
import Edit from "./Edit.vue";
import Add from "./Add.vue";
import Axios from "axios";

export default {
    data() {
        return {
            model: {
                file_name: "",
                file_sp: null,
                jenis: null,
                tanggal: null,
                periode: null,
            },
            status: "table",
            user: "",
            isRequest: false,
            jenis: [
                { nama: "Simpan Wajib", id: 1 },
                { nama: "Simpana Sukrela", id: 2 },
                { nama: "Pinjaman", id: 3 },
            ],
        };
    },

    components: {
        List,
        Edit,
        Add,
    },

    methods: {
        changeStatus(value) {
            this.status = "";
            let self = this;
            setTimeout(function () {
                self.status = value;
            }, 300);
        },

        showEdit(value) {
            let self = this;
            this.status = "";
            self.user = value;
            setTimeout(function () {
                self.status = "edit";
            }, 300);
        },

        showImage(value) {
            let self = this;
            this.status = "";
            self.user = value;
            setTimeout(function () {
                self.status = "image";
            }, 300);
        },

        download() {
            const link = document.createElement("a");
            link.href =
                "http://koperasikbn.test/dashboard/simpan-pinjam/download?periode=" +
                this.model.periode +
                "&tanggal=" +
                this.model.tanggal +
                "&jenis=" +
                this.model.jenis;
            link.download = "LAPORAN.PDF";
            link.click();
        },

        save() {
            let self = this;
            if (!self.isRequest) {
                const data = new FormData();
                data.append("file", this.model.file_sp);
                self.isRequest = true;

                self.$store
                    .dispatch("uploadSimpanPinjam", data)
                    .then((response) => {
                        flash(response.message);
                        self.model.file_name = null;
                        self.model.file_sp = null;
                        self.isRequest = false;
                    })
                    .catch((errors) => {
                        self.model.file_name = null;
                        self.model.file_sp = null;
                        self.isRequest = false;
                        Object.keys(errors).forEach((field) => {
                            errors[field].forEach((message) => {
                                flash(message, "danger", 5000);
                            });
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
                    this.model.file_sp = files[0];
                });
            }
        },
    },
};
</script>
