<template>
  <div class="body">
    <div class="pageHeader">
      <span class="headerTab">Header</span>
      <span class="headerTab">Header</span>
      <span class="headerTab">Header</span>
      <span class="headerTab">Header</span>
      <button class="tabButton">Sign In</button>
    </div>
    <div class="pageMain">
      <div class="subscribeBlock">
        <div class="subscxribeBlockTitle">Buy and sell cryptocurrency</div>
        <div class="fadedTextMedium">
          Fast and secure way to purchace or exchange 150+ cryptocurrancies
        </div>
        <div>
          <input type="text" placeholder="Subscribe Now" /> <button>-></button>
        </div>
      </div>
      <div class="searchFormBody">
        <div class="fadedTextMedium">Send</div>
        <div class="searchForm">
          <div>
            <input type="text" placeholder="USD" />
            <input type="text" placeholder="0.021481C" />
          </div>
        </div>
        <div class="fadedTextMedium">Recive</div>
        <div class="searchForm">
          <div>
            <input type="text" placeholder="BTC" />
            <input type="text" placeholder="0.021481C" />
          </div>
        </div>
        <span class="fadedTextMedium">1USD - 0.0000000888 BTC</span>
        <span class="linkText">Exeptions</span>
        <div class="linkText">No extra Fees</div>
        <button class="searchFormButtom">Buy Now</button>
        <div></div>
      </div>
    </div>
    <div class="pageLowerMain">
      <div>
        <div class="fadedTextMedium">Ask Questions</div>
      </div>
      <div>
        <div class="largeTextBody">Let ud hear from you directly!</div>
      </div>
    </div>
    <div class="pageBottom">
      <div>
        <div class="fadedTextMedium">Adress</div>
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
      <div>
        <div class="signUpForm">
          <div>
            <div class="fadedTextMedium">Full name</div>
            <input placeholder="Full Name" />
          </div>
          <div>
            <div class="fadedTextMedium">Email</div>
            <input placeholder="hello@example.com" />
          </div>
        </div>
        <div>
          <textarea placeholder="Tell us what er can help you with!" />
        </div>
        <div>
          <button>Send Message</button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.body {
  /* display: grid;
  grid-template-areas:
    "header header header header"
    "left left right right"
    "slim slim slim slim"
    "footer footer footer footer"; */
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
.subscribeBlock {
  display: block;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
}
.subscxribeBlockTitle {
  font-size: large;
  font-weight: bold;
  color: #ffffff;
}
.pageMain {
  display: flex;
  flex-direction: row;
  background-color: #1e2e50;
  padding-bottom: 5rem;
  padding-top: 5rem;
}

.searchFormBody {
  display: block;
  flex-direction: column;
  background-color: #ffffff;
  border-radius: 0.2rem;
  padding: 1rem;
  margin-left: auto;
  margin-right: auto;
}
.searchForm {
  display: flex;
  flex-direction: column;
}
.pageLowerMain {
  padding-top: 5rem;
  padding-bottom: 5rem;
  display: flex;
  justify-content: center;
}
.pageBottom {
  /* display: flex;
  flex-direction: row; */
  /* columns: 2; */
  display: grid;
  grid-template-columns: 40% 60%;
}
.signUpForm {
  display: flex;
  flex-direction: row;
}
.icons {
  width: 1.2rem;
}
.largeTextBody {
  font-size: large;
  font-weight: bold;
}
.fadedTextMedium {
  color: grey;
  width: 80%;
}
.linkText {
  color: blue;
}
</style>

<script>
import emailIcon from "../../Assets/emailIcon.png";
import phoneIcon from "../../Assets/callIcon.png";
import placeIcon from "../../Assets/placeIcon.png";
export default {
  name: "Home",

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