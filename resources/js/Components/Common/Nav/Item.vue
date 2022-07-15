<template>
  <Link
      :href="href"
      class="text-center font-bold p-4"
      :class="{ 'underline': active }"
  >
    <slot></slot>
  </Link>
</template>

<script>
export default {
  name: "Item",

  props: {

    href: {
      type: String,
      required: true,
    },

    active: {
      type: Boolean,
      required: false,
      default: false,
    }

  },
}
</script>

<style scoped>

</style>