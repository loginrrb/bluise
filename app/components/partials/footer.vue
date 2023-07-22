<template>
  <footer class="footer -mx-4 md:mx-0">
    <div class="container mx-auto pb-6 flex justify-center">
      <a href="https://blog.webtrio.net">
      <h4>All Right Reserved @ WEBtrio</h4>
      </a>
    </div>
  </footer>
</template>

<script lang="ts">
import { Component, Vue } from 'nuxt-property-decorator';

@Component
export default class Footer extends Vue {}
</script>

<style lang="scss">
.footer {
  background-color: $bluise;
}
</style>
