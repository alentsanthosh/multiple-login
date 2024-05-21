<template>
  <div>
    <h2 class="label">Login</h2>
    <form @submit.prevent="login">
      <div class="login">
        <input class="form-control" type="email" v-model="email" id="email" placeholder="Email">
      </div>
      <div>
        <input class="form-control" type="password" v-model="password" id="password" placeholder="Password">
      </div>
      <button class= "buttonsign" type="submit">Login</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    login() {
      axios.post('/login', {
        email: this.email,
        password: this.password
      })
      .then(response => {
        console.log(response.data.message);
        localStorage.setItem('token', response.data.token);
        if (response.data.role === 'user') {
          this.$router.push('/user/dashboard');
        } else if (response.data.role === 'distributor') {
          this.$router.push('/distributor/dashboard');
        }
      })
      .catch(error => {
        console.error(error.response.data.error);
      });
    }
  }
};
</script>
<style scoped>
form{
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 140px;
    padding-bottom:60px;
    position: absolute;
    left:38%;
    height: 300px;
    width: 300px;
    box-shadow : 0px 0px 80px -10px  rgba(0,0,0,0.2) ;
    border-radius: 10px;
}
.buttonsign{
  margin-top: 40px;
  border: none;
  border-radius: 6px;
  background-color: rgb(23, 23, 240);
  color:white;
}
.form-control{
  background: transparent;
  margin-top: 50px;
  padding: 15px;;
  border: none;
  border-radius: 6px;
  outline: none;
  background:#eaeaea
}
.label{
  color: rgb(23, 23, 240);
  margin-top: 70px;
  position: fixed;
  font-size: 30px;
  font-weight: 800;
  left: 46.5%;
}
</style>
