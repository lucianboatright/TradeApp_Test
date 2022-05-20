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
        <div>buy and sell cryptocurrency</div>
        <div>
          Fast and secure way to purchace or exchange 150+ cryptocurrancies
        </div>
        <div>
          <input type="text" placeholder="Subscribe Now" /> <button>-></button>
        </div>
      </div>
      <div class="searchFormBody">
        <div>Send</div>
        <div class="searchForm">
          <div>
            <input type="text" placeholder="USD" />
            <input type="text" placeholder="0.021481C" />
          </div>
          <div>
            <input type="text" placeholder="BTC" />
            <input type="text" placeholder="0.021481C" />
          </div>
        </div>
        <span>1USD - 0.0000000888 BTC</span><span>Exeptions</span>
        <span>No extra Fees</span>
        <button>Buy Now</button>
        <div></div>
      </div>
    </div>
    <div class="pageLowerMain">
      <div>
        <div>Ask Questions</div>
      </div>
      <div>
        <div>Let ud hear from you directly!</div>
      </div>
    </div>
    <div class="pageBottom">
      <div>
        <div>Adress</div>
        <div><span>Dartford, Kent</span></div>
        <div><span>0203 633 1775</span></div>
        <div><span>hello@example.com</span></div>
      </div>
      <div>
        <div class="signUpForm">
          <div>
            <div>Full name</div>
            <input placeholder="Full Name" />
          </div>
          <div>
            <div>Email</div>
            <input placeholder="hello@example.com" />
          </div>
        </div>
        <div>
          <input placeholder="Tell us what er can help you with!" />
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
}
.headerTab {
  margin-right: 1rem;
}
.subscribeBlock {
  display: block;
  flex-direction: column;
}

.pageMain {
  display: flex;
  flex-direction: row;
}

.searchFormBody {
  display: block;
  flex-direction: column;
}
.searchForm {
  display: flex;
  flex-direction: column;
}
.pageLowerMain {
  display: block;
  justify-content: center;
}
.pageBottom {
  display: flex;
  flex-direction: row;
}
.signUpForm {
  display: flex;
  flex-direction: row;
}
</style>

<script>
export default {
  name: "Home",

  data() {
    return {};
  },

  methods: {},
};
</script>