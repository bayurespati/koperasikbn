<template>
    <v-main>
        <v-container fluid>
            <div class="base-title">
                <h2>Manage Slider Images</h2>
                <p class="color-sub-title">Here you can manage slider images</p>
            </div>
            <transition name="fade-transition">
                <v-row v-if="status === 'not-update'">
                    <template v-for="(banner, index) in banners">
                        <v-col cols="12" xs="12" md="4" :key="index">
                            <v-card class="mx-auto" max-width="400">
                                <v-img
                                    class="white--text align-end"
                                    height="200px"
                                    :src="
                                        banner.image_link == null
                                            ? 'image_static/hero-1-bg.jpg'
                                            : banner.image_link
                                    "
                                ></v-img>

                                <v-card-actions>
                                    <v-btn
                                        color="success"
                                        text
                                        @click="update(banner)"
                                    >
                                        Update
                                    </v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-col>
                    </template>
                </v-row>
                <v-row v-if="status === 'update'">
                    <v-col col="12">
                        <update
                            :banner="banner"
                            @cancel="cancel($event)"
                        ></update>
                    </v-col>
                </v-row>
            </transition>
        </v-container>
    </v-main>
</template>

<script>
import Update from "./Update";

export default {
    data() {
        return {
            banners: [],
            status: "not-update",
            banner: "",
        };
    },

    beforeMount() {
        this.getBanners();
    },

    components: {
        Update,
    },

    methods: {
        getBanners() {
            axios
                .get("/dashboard/banners")
                .then((response) => {
                    console.log(response);
                    this.banners = response.data;
                })
                .catch((errors) => {
                    console.log(errors);
                });
        },

        update(value) {
            let self = this;
            self.banner = value;
            self.status = "";
            setTimeout(function () {
                self.status = "update";
            }, 300);
        },

        cancel(value) {
            let self = this;

            if (value == "success") {
                this.getBanners();
            }
            self.status = "";
            setTimeout(function () {
                self.status = "not-update";
            }, 300);
        },
    },
};
</script>
