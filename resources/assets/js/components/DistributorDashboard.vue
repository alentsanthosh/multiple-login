<template>
  <div>
    <h5 class="heading">Distributor Dashboard page</h5>
    <button @click="logout" class="logout-button">Logout</button>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  methods: {
    logout() {
      axios.post('/logout')
        .then(response => {
          console.log(response.data.message);
          this.$router.push('/login');
        })
        .catch(error => {
          console.error(error.response.data.error);
        });
    }
  }
}
</script>

<style scoped>
.heading {
  position: fixed;
  left: 43%;
  margin-top: 100px;
}

.logout-button {
  margin-top: 200px;
  position: fixed;
  left: 47%;
  border: none;
  border-radius: 6px;
  background-color: #ff0000;
  color: white;
  padding: 10px 20px;
  cursor: pointer;
}
</style>
