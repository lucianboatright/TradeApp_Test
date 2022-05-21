<template>
  <div class="request-a-callback-form">
    <transition name="fade" mode="out-in">
      <div v-if="sent">
        <p>Thanks for contacting us, we will get back to you shortly...</p>
      </div>
    </transition>
    <form v-on:submit="sendForm">
      <input type="text" v-model="ContactForm.name" placeholder="Your Name" />
      <input
        type="text"
        v-model="ContactForm.email"
        placeholder="Email Address"
      />
      <!-- <input
        type="password"
        v-model="ContactForm.phone"
        placeholder="Password"
      /> -->
      <!-- <input type="text" v-model="ContactForm.subject" placeholder="Subject" />
      <br /> -->
      <button data-text="submit" type="submit" class="btn btn-primary">
        Submit
      </button>
    </form>
    <div>
      <div v-if="varified">Please Enter Name Email</div>
    </div>
  </div>
</template>
        <script>
export default {
  data() {
    return {
      varified: false,
      sent: false,
      ContactForm: {
        name: "",
        email: "",
        // password: "",
        // phone: "",
        // subject: "",
      },
    };
  },
  methods: {
    sendForm(e) {
      e.preventDefault();
      if (this.ContactForm.name != "" && this.ContactForm.email != "") {
        console.log(this.ContactForm);
        this.varified = false;
        this.$axios
          .post(
            "../../../config/mail.php",
            querystring.stringify(this.ContactForm)
          )
          .then((res) => {
            this.sent = true;
          });
      } else {
        console.log("You need to add something in all Boxes");
        this.varified = true;
      }
    },
  },
};
</script>

    