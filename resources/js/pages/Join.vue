<template>
  <div id="join">
    <div class="bg bg-cover fixed"></div>
    <div class="sidebar fixed bg-white shadow-md w-1/4 h-screen pin-r py-32 px-16">
      <img :src="require('./../../assets/logo.jpg')" alt="">
      <div class="mb-8"></div>
      <input v-model="userId" class="appearance-none leading-tight border-grey-dark border rounded w-full py-2 px-3 text-grey-darker" type="text" placeholder="ID">
      <div class="mb-8"></div>
      <input v-model="password" class="appearance-none leading-tight border-grey-dark border rounded w-full py-2 px-3 text-grey-darker" type="password" placeholder="Password">
      <div class="mb-16"></div>
      <div class="text-center mb-12">
        <button @click="register()" class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">회원가입</button>
      </div>
      <div class="text-center text-xs text-grey">
        Copyright ⓒ 2019 <a class="link text-grey hover:text-grey-darker" target="_blank" href="https://github.com/yeongju-discount-mart">Yeongju Discount Mart</a>, All rights reserved.
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      userId: "",
      password: ""
    }
  },
  methods: {
    register() {
      console.log();
      const body = {
        user_id: this.userId,
        password: this.password
      };
      return axios.post("/api/auth/register", body)
      .then(res => {
        alert("회원가입에 성공하셨습니다. 로그인 해 주십시오.");
        this.$router.push("/login");
      })
      .catch(err => {
        alert("회원가입 실패");
      });
    }
  }
}
</script>

<style lang="scss" scoped>
.bg {
  background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url('../../assets/loginbg.jpg') center center no-repeat;
  background-size: cover;
  width: 100vw;
  height: 100vh;
}
.btn {
  transition: all 0.3s;
}
input {
  transition: all 0.3s;
  outline: none;
  &:focus {
    border-color: #9561E2;
  }
}
.link {
  text-decoration: none;
  transition: all 0.3s;
  &:hover {
    text-decoration: underline;
  }
}
</style>