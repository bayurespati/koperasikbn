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
                @input="$v.model.image_file.$touch()"
                @blur="$v.model.image_file.$touch()"
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
                NAMA 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-text-field
                @input="$v.model.name.$touch()"
                @blur="$v.model.name.$touch()"
                :error-messages="nameError"
                v-model="model.name"
                label="Nama"
                required
              >
              </v-text-field>
            </v-col>

            <!--======================================================================================
                EMAIL 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-text-field
                @input="$v.model.email.$touch()"
                @blur="$v.model.email.$touch()"
                :error-messages="emailError"
                v-model="model.email"
                label="Email"
                required
              >
              </v-text-field>
            </v-col>

            <!--======================================================================================
                PHONE 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-text-field
                @input="$v.model.phone.$touch()"
                @blur="$v.model.phone.$touch()"
                :error-messages="phoneError"
                v-model="model.phone"
                label="Phone"
                required
              >
              </v-text-field>
            </v-col>

            <!--======================================================================================
                ROLE 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="4">
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
                POSITION 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="4">
              <v-select
                v-model="model.position"
                :items="positions"
                label="Postiion"
                item-text="name"
                item-value="id"
                persistent-hint
                required
                small-chips
              ></v-select>
            </v-col>

            <!--======================================================================================
                TEACHER 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="4">
              <v-select
                v-model="model.teacher"
                :items="teachers"
                label="Teacher"
                item-text="name"
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
        name: this.user.name == undefined ? "" : this.user.name,
        email: this.user.email == undefined ? "" : this.user.email,
        phone: this.user.phone == undefined ? "" : this.user.phone,
        role: this.user.role_id == undefined ? "" : this.user.role_id,
        position:
          this.user.position_id == undefined ? "" : this.user.position_id,
        teacher: this.user.teacher_id == undefined ? "" : this.user.teacher_id,
      },
      teachers: [],
      positions: [],
      roles: [],
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      image_file: { required },
      name: { required },
      email: { required },
      phone: { required },
      role: { required },
    },
  },

  computed: {
    isValid() {
      return (
        this.nameError.length == 0 &&
        this.emailError.length == 0 &&
        this.phoneError.length == 0 &&
        this.roleError.length == 0 &&
        this.model.image_name != null
      );
    },

    imageError() {
      this.model.image_file;
      const errors = [];
      if (!this.$v.model.image_file.$dirty) return errors;
      !this.$v.model.image_file.required && errors.push("Image is required.");
      return errors;
    },

    nameError() {
      const errors = [];
      if (!this.$v.model.name.$dirty) return errors;
      !this.$v.model.name.required && errors.push("Nama is required.");
      return errors;
    },

    emailError() {
      const errors = [];
      if (!this.$v.model.email.$dirty) return errors;
      !this.$v.model.email.required && errors.push("Email is required.");
      return errors;
    },

    phoneError() {
      const errors = [];
      if (!this.$v.model.phone.$dirty) return errors;
      !this.$v.model.phone.required && errors.push("Phone number is required.");
      return errors;
    },

    roleError() {
      const errors = [];
      if (!this.$v.model.role.$dirty) return errors;
      !this.$v.model.role.required && errors.push("Role is required.");
      return errors;
    },
  },

  beforeMount() {
    this.getTeachers();
    this.getPositions();
    this.getRoles();
  },

  methods: {
    getTeachers() {
      let self = this;

      self.$store.dispatch("getTeachers").then((response) => {
        self.teachers = response.data;
      });
    },

    getPositions() {
      let self = this;

      self.$store.dispatch("getPositions").then((response) => {
        self.positions = response.data;
      });
    },

    getRoles() {
      let self = this;

      self.$store.dispatch("getRoles").then((response) => {
        self.roles = response.data;
      });
    },

    save(content) {
      this.$v.$touch();
      let self = this;
      if (!self.isRequest && self.isValid) {
        const data = {
          image_name: self.model.image_name,
          image_file: self.model.image_url,
          name: self.model.name,
          email: self.model.email,
          phone: self.model.phone,
          role_id: self.model.role,
          position_id: self.model.position,
          teacher_id: self.model.teacher,
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
      this.model.name = "";
      this.model.email = "";
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
