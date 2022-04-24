<template>
  <div class="welcome_container">
    <div class="welcome_background"></div>
    <div class="welcome_box">
        <h1>Phyrus</h1>
        <h3>PHP Framework</h3>
        <h2>Welcome to your new project</h2>
        <p>Start reading the docs at <a href='https://phyrus.org/documentation' target="_blank">phyrus.org/documentation</a></p>
    </div>
  </div>
</template>

<style lang="scss" src="./homepage.scss"></style>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  name: 'IndexPage'
})
</script>
