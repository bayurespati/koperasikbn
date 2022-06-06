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
                QUESTION INDO
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-textarea
                @input="$v.model.question_indo.$touch()"
                @blur="$v.model.question_indo.$touch()"
                :error-messages="questionIndoError"
                v-model="model.question_indo"
                label="Pertanyan bahasa Indonesia"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
                QUESNTION ENG 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-textarea
                @input="$v.model.question.$touch()"
                @blur="$v.model.question.$touch()"
                :error-messages="questionError"
                v-model="model.question"
                label="Pertanyaan bahasa Inggris"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
                ANSWER INDO
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-textarea
                @input="$v.model.answer_indo.$touch()"
                @blur="$v.model.answer_indo.$touch()"
                :error-messages="answerIndoError"
                v-model="model.answer_indo"
                label="Jawaban bahasa Indonesia"
                name="input-7-4"
                required
                outlined
              >
              </v-textarea>
            </v-col>

            <!--======================================================================================
                ANSWER ENG 
            ==========================================================================================-->
            <v-col cols="12" xs="12" md="6">
              <v-textarea
                @input="$v.model.answer.$touch()"
                @blur="$v.model.answer.$touch()"
                :error-messages="answerError"
                v-model="model.answer"
                label="Jawaban bahasa Inggris"
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

  data() {
    return {
      model: {
        question: "",
        question_indo: "",
        answer: "",
        answer_indo: "",
      },
      valid: false,
      isRequest: false,
      alert: true,
    };
  },

  validations: {
    model: {
      question_indo: { required },
      question: { required },
      answer_indo: { required },
      answer: { required },
    },
  },

  computed: {
    isValid() {
      return (
        this.questionError.length == 0 &&
        this.questionIndoError.length == 0 &&
        this.answerError.length == 0 &&
        this.answerIndoError.length == 0
      );
    },

    questionError() {
      const errors = [];
      if (!this.$v.model.question.$dirty) return errors;
      !this.$v.model.question.required && errors.push("Pertanyaan harus diisi");
      return errors;
    },

    questionIndoError() {
      const errors = [];
      if (!this.$v.model.question_indo.$dirty) return errors;
      !this.$v.model.question_indo.required &&
        errors.push("Pertanyaan harus diisi");
      return errors;
    },

    answerError() {
      const errors = [];
      if (!this.$v.model.answer.$dirty) return errors;
      !this.$v.model.answer.required && errors.push("Jawaban harus diisi.");
      return errors;
    },

    answerIndoError() {
      const errors = [];
      if (!this.$v.model.answer_indo.$dirty) return errors;
      !this.$v.model.answer_indo.required && errors.push("Jawaban harus diisi");
      return errors;
    },
  },

  methods: {
    save(content) {
      this.$v.$touch();
      let self = this;
      if (!self.isRequest && self.isValid) {
        const data = {
          question: self.model.question,
          question_indo: self.model.question_indo,
          answer: self.model.answer,
          answer_indo: self.model.answer_indo,
        };
        self.isRequets = true;
        self.$store
          .dispatch("storeFaq", data)
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
      this.model.question = "";
      this.model.question_indo = "";
      this.model.answer = "";
      this.model.answer_indo = "";
    },

    close() {
      this.$emit("cancelAdd", "table");
    },
  },
};
</script>
