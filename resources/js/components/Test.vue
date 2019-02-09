<template>
  <div id="test">
    {{ getTest }}
  </div>
</template>

<script>
export default {
  name: "Test",
  data() {
    return {

    }
  },
  computed: {
    getTest() {
      return this.$store.getters.getTest;
    }
  }
}
</script>
