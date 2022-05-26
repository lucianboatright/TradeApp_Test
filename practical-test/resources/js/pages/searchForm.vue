<script>
export default {
  data() {
    return {
      count: 0,
    };
  },
};
</script>

<template>
  <div class="searchFormBody">
    <div>
      <label class="fadedTextMediumBlue">Send</label>
      <div class="searchForm">
        <div class="searchFormInputs">
          <input type="text" placeholder="USD" />
          <input type="text" placeholder="0.021481C" />
        </div>
      </div>
      <label class="fadedTextMediumBlue">Recive</label>
      <div class="searchForm">
        <div class="searchFormInputs">
          <input type="text" placeholder="BTC" />
          <input type="text" placeholder="0.021481C" />
        </div>
      </div>
    </div>
    <span class="fadedTextMedium">1USD - 0.0000000888 BTC</span>
    <span class="linkText">Exeptions</span>
    <div class="linkText">No extra Fees</div>
    <button class="searchFormButtom">Buy Now</button>
    <div></div>
  </div>
</template>

<style scoped>
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
.searchFormInputs {
  display: flex;
  flex-direction: row;
}
.searchForm input:first-child {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
  cursor: pointer;
  border: 1px solid #ccc;
  margin-bottom: 0.25rem;
  width: 50%;
  padding-left: 0.5rem;
}
.searchForm input:last-child {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
  cursor: pointer;
  border: 1px solid #ccc;
  margin-bottom: 0.25rem;
  width: 50%;
  padding-left: 0.5rem;
}
.searchForm input {
  cursor: pointer;
  border: 1px solid #ccc;
  margin-bottom: 0.25rem;
  width: 50%;
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
  margin-top: 0.5rem;
}
</style>