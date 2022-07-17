<template>
  <App>

    <Head>
      <title>Dante Schrauwen</title>
    </Head>

    <div class="py-32">
      <h2 class="text-5xl font-bold">Hey!</h2>
      <p class="text-base text-gray-600 mt-2">This is the place where I will put some info about me, but for now I'm working on some <strong>fun</strong> projects</p>
      <p class="text-base text-gray-600">Want to work together or need some improvement in one of your projects?</p>
      <p class="text-base text-sky-700 mt-2"><a :href="$route('contact.show')" class="underline hover:text-sky-600">contact me</a></p>
      <p class="text-base text-sky-700 mt-2"><a :href="$route('projects.show')" class="underline hover:text-sky-600">look at the projects I've done</a></p>
    </div>

  </App>
</template>

<script>
import App from "../Components/Layouts/App";

export default {
  name: "Home",

  components: {
    App
  },
}
</script>

<style scoped>

</style>