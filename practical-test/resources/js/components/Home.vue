<template>
  <div class="body">
    <div class="pageHeader">
      <span class="headerTab">Home</span>
      <span class="headerTab">Price</span>
      <span class="headerTab">App</span>
      <span class="headerTab">Dashboard</span>
      <button class="tabSignUpButton">Sign In</button>
    </div>
    <div class="pageMain">
      <div class="subscribeBlock">
        <div class="subscxribeBlockTitle">Buy and sell cryptocurrency</div>
        <div class="fadedTextMedium">
          Fast and secure way to purchace or exchange 150+ cryptocurrancies
        </div>
        <div>
          <input type="text" placeholder="Subscribe Now" />
          <button class="subscribeArrowButton">-></button>
        </div>
      </div>
      <div class="searchFormBody">
        <label class="fadedTextMedium">Send</label>
        <div class="searchForm">
          <div>
            <input type="text" placeholder="USD" />
            <input type="text" placeholder="0.021481C" />
          </div>
        </div>
        <label class="fadedTextMedium">Recive</label>
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
      <div class="signUpFormBody">
        <div class="signUpForm">
          <div>
            <div class="fadedTextMedium">Full name</div>
            <input placeholder="Full Name" />
          </div>
          <div>
            <div class="fadedTextMedium">Email</div>
            <input class="" placeholder="hello@example.com" />
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
.tabSignUpButton {
  background-color: #ffffff;
  /* border: none; */
  border: #4d9bfe solid 0.5px;
  border-radius: 0.2rem;
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
  /* border-color: #4d9bfe; */
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
.searchForm input {
  cursor: pointer;
  border-radius: 0.2rem;
  border: 1px solid #ccc;
  margin-bottom: 0.25rem;
}
.searchFormButtom {
  background-color: #4d9bfe;
  width: 100%;
  border-radius: 0.2rem;
  border: none;
  color: #ffffff;
  font-weight: bold;
  padding-top: 0.2rem;
  padding-bottom: 0.2rem;
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
  margin-bottom: 5rem;
}
.addressSection {
  margin-left: auto;
  margin-right: auto;
  width: 12.5rem;
}
.addressSection div {
  margin-top: 0.5rem;
  /* margin-top: 1rem; */
}
.addressSection img {
  margin-right: 0.25rem;
}
.signUpFormBody {
  width: 100%;
}
.signUpForm {
  /* display: flex; */
  /* flex-direction: row; */
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
  /* padding: 12px 20px; */
  box-sizing: border-box;
  border-radius: 4px;
  font-size: 16px;
  /* resize: none; */
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
.marginLeft {
  margin-left: 0.4rem;
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