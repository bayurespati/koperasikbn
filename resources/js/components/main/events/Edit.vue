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
                TITLE 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-text-field
                @input="$v.model.title.$touch()"
                @blur="$v.model.title.$touch()"
                :error-messages="titleError"
                v-model="model.title"
                label="Title"
                required
              >
              </v-text-field>
            </v-col>

            <!--======================================================================================
                DESCRIPTION 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-textarea
                @input="$v.model.title.$touch()"
                @blur="$v.model.title.$touch()"
                :error-messages="titleError"
                v-model="model.description"
                label="Description"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
                TAGS 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="12">
              <v-select
                :error-messages="tagError"
                v-model="model.tags"
                :items="tags"
                item-text="name"
                item-value="id"
                label="Tag"
                required
                small-chips
                multiple
              ></v-select>
            </v-col>

            <!--======================================================================================
                CONTENT 
            ==========================================================================================-->
            <v-col cols="12">
              <vue-editor v-model="model.content"></vue-editor>
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

  props: { event: {} },
  data() {
    return {
      model: {
        description: this.event.description ?? "",
        tags: this.event.tags ?? "",
        image_name: this.event.image_name ?? "",
        image_url: this.event.image_link ?? "",
        content: this.event.content ?? "",
        title: this.event.title ?? "",
        image_file: null,
      },

      tags: [],

      //Toolbar for WYSIWYG
      customToolbar: [
        [{ header: [false, 1, 2, 3, 4, 5, 6] }],
        ["bold", "italic", "underline", "strike"],
        [
          { align: "" },
          { align: "center" },
          { align: "right" },
          { align: "justify" },
        ],
        ["blockquote", "code-block"],
        [{ list: "ordered" }, { list: "bullet" }, { list: "check" }],
        [{ indent: "-1" }, { indent: "+1" }],
        [{ color: [] }, { background: [] }],
        ["clean"],
      ],
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      description: { required },
      image_file: { required },
      title: { required },
      tags: { required },
    },
  },

  computed: {
    isValid() {
      return (
        this.titleError.length == 0 &&
        this.descriptionError.length == 0 &&
        this.model.image_name != "" &&
        this.model.content != "" &&
        this.model.tags != ""
      );
    },

    imageError() {
      const errors = [];
      if (!this.$v.model.image_file.$dirty) return errors;
      !this.$v.model.image_file.required && errors.push("Image is required.");
      return errors;
    },

    titleError() {
      const errors = [];
      if (!this.$v.model.title.$dirty) return errors;
      !this.$v.model.title.required && errors.push("Title is required.");
      return errors;
    },

    descriptionError() {
      const errors = [];
      if (!this.$v.model.description.$dirty) return errors;
      !this.$v.model.description.required && errors.push("Title is required.");
      return errors;
    },

    tagError() {
      const errors = [];
      if (!this.$v.model.tags.$dirty) return errors;
      !this.$v.model.tags.required && errors.push("Tag is required.");
      return errors;
    },
  },

  methods: {
    save(content) {
      let self = this;
      self.$v.$touch();

      if (!self.isRequest && self.isValid) {
        if (typeof self.model.tags[0] === "object") {
          self.model.tags = this.setTags(self.model.tags);
        }
        const data = {
          description: self.model.description,
          image_name: self.model.image_name,
          image_file: self.model.image_url,
          tags: self.model.tags,
          content: self.model.content,
          title: self.model.title,
          id: self.event.id,
        };

        self.isRequets = true;
        self.$store
          .dispatch("editEvent", data)
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

    setTags(data) {
      var tags = [];
      data.forEach(function (item) {
        tags.push(item.id);
      });

      return tags;
    },

    clearForm() {
      this.$v.$reset();
      this.model.image_file = "";
      this.model.image_name = "";
      this.model.image_url = "";
      this.model.tags = "";
      this.model.description = "";
      this.model.content = "";
      this.model.title = "";
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

