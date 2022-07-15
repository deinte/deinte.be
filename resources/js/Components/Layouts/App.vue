<template>
  <div class="container mx-auto">
    <div class="flex justify-between items-center">
      <h1 class="text-xl font-bold">Dante Schrauwen</h1>

      <div class="space-x-4 py-8">
        <Item
            :href="route('index')"
            :active="route().current() === 'index'"
        >Home
        </Item>
        <Item
            :href="route('projects.show')"
            :active="route().current() === 'projects.show'"
        >Projecten
        </Item>
        <Item
            :href="route('contact.show')"
            :active="route().current() === 'contact.show'"
        >Contact
        </Item>
      </div>
    </div>

    <main>
      <slot/>
    </main>
  </div>
</template>

<script>
import Item from "../Common/Nav/Item";

export default {
  name: "App",

  components: {
    Item
  }
}
</script>

<style scoped>
.wrapper {
  display: flex;
  flex-direction: row;
  align-items: stretch;
  width: 100%;
  height: 5em;
  background: #ccc;
}

.wrapper > .left {
  background: #fcc;
}

.wrapper > .right {
  background: #ccf;
  flex: 1;
}
</style>