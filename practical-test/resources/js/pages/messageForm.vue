<script>
export default {
  methods: {
    sendMessage(e) {
      e.preventDefault();
      let formData = new FormData();
      formData.append("file", this.SendMessage);
      if (
        this.SendMessage.name != "" &&
        this.SendMessage.email != "" &&
        this.SendMessage.message != ""
      ) {
        console.log("Name", this.SendMessage.name);
        console.log("Email", this.SendMessage.email);
        console.log("Message", this.SendMessage.message);
        this.validation = false;
        axios
          .post("/api/mail", this.SendMessage)
          .then((response) => {
            this.SendMessage = {};
          })
          .catch((error) => {
            console.log("error");
          });
      } else {
        this.validation = true;
      }
    },
    SignInClick() {
      this.$router.push("/signupform");
    },
  },
  data() {
    return {
      validation: false,
      SendMessage: {
        name: "",
        email: "",
        message: "",
      },
    };
  },
};
</script>

<template>
  <div>
    <form
      v-on:submit="sendMessage"
      @submit.prevent="sendMessage"
      class="signUpFormBody"
      method="POST"
    >
      <div class="signUpForm">
        <div>
          <div class="fadedTextMedium">Full name</div>
          <input
            type="text"
            v-model="SendMessage.name"
            placeholder="Full Name"
          />
        </div>
        <div>
          <div class="fadedTextMedium">Email</div>
          <input
            type="text"
            v-model="SendMessage.email"
            placeholder="hello@example.com"
          />
        </div>
      </div>
      <div>
        <textarea
          type="text"
          v-model="SendMessage.message"
          placeholder="Tell us what er can help you with!"
        />
      </div>
      <div>
        <button data-text="submit" type="submit" class="signUpFormButton">
          Send Message
        </button>
        <div v-if="validation" class="alertMessage">
          Please Enter Into all Fields, Thank You
        </div>
      </div>
    </form>
  </div>
</template>

<style scoped>
.signUpFormBody {
  width: 100%;
}
.signUpForm {
  columns: 2;
  width: 80%;
}
.signUpForm input {
  cursor: pointer;
  border-radius: 0.2rem;
  border: 1px solid #ccc;
  padding-left: 0.8rem;
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
  margin-bottom: 0.25rem;
  width: 100%;
}
.signUpFormBody textarea {
  padding-left: 0.8rem;
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
  cursor: pointer;
  border-radius: 0.2rem;
  border: 1px solid #ccc;
  width: 80%;
  height: 100px;
  box-sizing: border-box;
  border-radius: 4px;
  font-size: 16px;
}
.signUpFormButton {
  background-color: #4d9bfe;
  color: #ffffff;
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
  border: none;
  border-radius: 0.1rem;
  margin-top: 0.2rem;
  font-size: small;
}
.alertMessage {
  font-size: large;
  color: crimson;
}
</style>