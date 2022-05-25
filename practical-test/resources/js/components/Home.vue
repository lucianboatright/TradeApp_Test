<template>
  <div class="body">
    <div class="pageHeader">
      <span class="headerTab">Home</span>
      <span class="headerTab">Price</span>
      <span class="headerTab">App</span>
      <span class="headerTab">Dashboard</span>
      <button @click.prevent="SignInClick()" class="tabSignUpButton">
        Sign In
      </button>
    </div>
    <div class="pageMain">
      <div class="subscribeBlock">
        <div class="subscxribeBlockTitle">Buy and sell cryptocurrency</div>
        <div class="fadedTextMediumBlue">
          Fast and secure way to purchace or exchange 150+ cryptocurrancies
        </div>
        <div class="marginTop1">
          <input type="text" placeholder="Subscribe Now" />
          <button class="subscribeArrowButton">-></button>
        </div>
      </div>
      <SearchForm />
    </div>
    <div class="pageLowerMain">
      <div>
        <div class="fadedTextMediumBlue">Ask Questions</div>
      </div>
      <div>
        <div class="largeTextBody">Let us hear from you directly!</div>
      </div>
    </div>
    <div class="pageBottom">
      <div class="addressSection">
        <div class="fadedTextMedium">Address</div>
        <div class="fadedTextMedium">
          <img class="icons" :src="placeIcon" /><span>Dartford, Kent</span>
        </div>
        <div class="fadedTextMedium">
          <img class="icons" :src="phoneIcon" /><span>0203 633 1775</span>
        </div>
        <div class="fadedTextMedium">
          <img class="icons" :src="emailIcon" /><span>hello@example.com</span>
        </div>
      </div>
      <MessageForm />
    </div>
  </div>
</template>


<style scoped>
.body {
}
.pageHeader {
  display: flex;
  justify-content: flex-end;
  padding-right: 10%;
  background-color: #1e2e50;
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.headerTab {
  margin-right: 1rem;
  color: #ffffff;
}
.tabSignUpButton {
  background-color: #ffffff;
  border: #4d9bfe solid 0.5px;
  border-radius: 0.2rem;
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
}
.subscribeBlock {
  display: block;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
  width: 25rem;
}
.subscribeBlock input {
  cursor: pointer;
  border: 1px solid #ccc;
  border-radius: 0.2rem;
  padding-left: 0.5rem;
}
.subscxribeBlockTitle {
  font-size: large;
  font-weight: bold;
  color: #ffffff;
}
.marginTop1 {
  margin-top: 1rem;
}
.subscribeArrowButton {
  background-color: #4d9bfe;
  border: none;
  padding-left: 0.8rem;
  padding-right: 0.8rem;
  padding-top: 0.17rem;
  padding-bottom: 0.15rem;
  color: #ffffff;
  border-radius: 0.1rem;
}
.pageMain {
  display: flex;
  flex-direction: row;
  background-color: #1e2e50;
  padding-bottom: 5rem;
  padding-top: 5rem;
}

.pageLowerMain {
  padding-top: 5rem;
  padding-bottom: 5rem;
  text-align: center;
}
.pageBottom {
  display: grid;
  grid-template-columns: 40% 60%;
  margin-bottom: 5rem;
}
.addressSection {
  margin-left: auto;
  margin-right: auto;
  width: 12.5rem;
}
.addressSection div {
  margin-top: 0.5rem;
}
.addressSection img {
  margin-right: 0.25rem;
}
.icons {
  width: 1.2rem;
}
.largeTextBody {
  font-size: x-large;
  font-weight: bold;
  color: #293579;
}
.fadedTextMediumGrey {
  color: grey;
}
.fadedTextMediumBlue {
  color: #7184ad;
}
.linkText {
  color: blue;
}
.marginLeft {
  margin-left: 0.4rem;
}
</style>

<script>
import emailIcon from "../../Assets/emailIcon.png";
import phoneIcon from "../../Assets/callIcon.png";
import placeIcon from "../../Assets/placeIcon.png";
import SearchForm from "./searchForm.vue";
import MessageForm from "./messageForm.vue";
// import MessageForm from "../../views/welcome.blade.php";

export default {
  name: "Home",

  components: {
    SearchForm,
    MessageForm,
  },

  data() {
    return {
      emailIcon: emailIcon,
      phoneIcon: phoneIcon,
      placeIcon: placeIcon,
    };
  },

  methods: {},
};
</script>