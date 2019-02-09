<template>
  <div id="main">
    <div class="bg-purple-dark shadow">
      <div class="container py-4 mx-auto text-white text-sm leading-tight">
        Sunghwas
        <div class="float-right cursor-pointer flex items-baseline" @mouseenter="setDropdown(true)" @mouseleave="setDropdown(false)">{{ getUser.user_id }} 님
          <div class="absolute bg-white p-8 shadow text-black" v-if="dropdown">
            <div>{{ getUser.user_id }} 님</div>
            <div class="mt-3">레벨: {{getUser.level}}</div>
            <div class="mt-3">점수: {{getUser.score}}</div>
            <button @click="logout()" class="btn mt-3 text-sm rounded px-2 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">로그아웃</button>
          </div>
        </div>
      </div>
    </div>
    <div class="flex container mx-auto mt-4">
      <div class="w-1/2 mt-32 text-center bg-white shadow pr-12">
        <img class="mt-16 rounded-full border border-grey-light sunghwa" :src="getStatus.src" alt="정성화의 얼굴">
        <div class="my-16 text-lg" v-html="getStatus.text"></div>
        <div class="flex mb-8 items-center">
          <div class="w-1/4 text-lg">행복도</div>
          <div class="w-3/4 bg-grey-light mr-6">
            <div class="bg-red text-md leading-normal py-2 text-center text-white" :style="`width: ${getUser.love_point}%`">{{getUser.love_point}}%</div>
          </div>
        </div>
        <div class="flex mb-8 items-center">
          <div class="w-1/4 text-lg">포만도</div>
          <div class="w-3/4 bg-grey-light mr-6">
            <div class="bg-orange-dark text-md leading-normal py-2 text-center text-white" :style="`width: ${getUser.hungry_point}%`">{{getUser.hungry_point}}%</div>
          </div>
        </div>
      </div>
      <div class="w-1/2 mt-32 px-2 pl-12">
        <div class="flex flex-wrap -mx-2 bg-white shadow">
          <div class="w-full pl-3 text-lg mt-3 mb-3">할 일</div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(1)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">급식 먹기</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(2)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">간식 먹기</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(3)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">영화 보기</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(4)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">데이트</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(5)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">코딩하기</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(6)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">축구</button>
          </div>
        </div>
        <div class="flex flex-wrap -mx-2 bg-white shadow my-12">
          <div class="w-full pl-3 text-lg mt-3 mb-3">대화하기</div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(7)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">안녕?</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(8)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">뭐 해?</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(9)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">심심해</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(10)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">잘 지내?</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(11)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">부먹이냐 찍먹이냐</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button @click="update(12)" class="btn rounded px-4 py-1 w-full bg-white text-sm leading-loose border border-purple text-purple hover:bg-purple hover:text-white">짜장면이냐 짬뽕이냐</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Main",
  data() {
    return {
      dropdown: false
    }
  },
  computed: {
    getUser() {
      return this.$store.getters.getCurrentUser;
    },
    getStatus() {
      // TODO: 밸런스 조절부탁
      if (this.getUser.hunger_point > 80) {
        return {
          src: require('./../../assets/sunghwa_4.jpg'),
          text: `성화는 지금 <span class="text-orange-dark">배가 불러요!</span>`
        };
      }
      else if (this.getUser.hunger_point > 30 && this.getUser.love_point > 60) {
        return {
          src: require('./../../assets/sunghwa_1.jpg'),
          text: `성화는 지금 <span class="text-pink-dark">행복해요!</span>`
        };
      }
      else if (this.getUser.love_point > 30) {
        return {
          src: require('./../../assets/sunghwa_2.jpg'),
          text: `성화는 지금 그저 그래요!`
        };
      }
      else if (this.getUser.hunger_point > 0) {
        return {
          src: require('./../../assets/sunghwa_5.jpg'),
          text: `성화는 지금 <span class="text-red">배가 너무 고파요!</span>`
        };
      }
      else {
        return {
          src: require('./../../assets/sunghwa_3.jpg'),
          text: `성화는 지금 <span class="text-blue">슬퍼요!</span>`
        };
      }
    }
  },
  created() {
    if (this.$store.getters.getCurrentUser.id == null) {
      this.$router.push("/login");
    }
  },
  methods: {
    async update(number) {
      await this.playSound(number);
      await this.$http.post('/api/user-update', { id: this.$store.getters.getCurrentUser.id, pointType: number }).then(res => {}).catch(err => { alert("성화가 잔뜩 화가 났어요."); });
      await this.$store.dispatch('retrieveUser', this.$store.getters.getCurrentUser.id);
    },
    playSound(number) {
      if (number < 7) return;

      const audio = new Audio(`./../../assets/sound_${number}.m4a`);
      audio.play();
    },
    setDropdown(bool) {
      this.dropdown = bool;
    },
    logout() {
      this.$store.commit('setCurrentUser', {});
      this.$router.push("/login");
    }
  }
}
</script>


<style lang="scss">
#main {
  overflow: hidden;
}
.sunghwa {
  width: 256px;
  height: 256px;
}
</style>
