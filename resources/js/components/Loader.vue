<template>
  <div class="fixed pin z-50 overflow-auto bg-smoke-light flex">
  </div>
</template>

<script>
export default {
  name: "Loader",
  data() {
    return {

    }
  },
  props: ['isActive']
}
</script>

<style lang="scss">
.bg {
  background-color: white;
  width: 100vw;
  height: 100vh;
  position: fixed;
  z-index: 100;
}
</style>
