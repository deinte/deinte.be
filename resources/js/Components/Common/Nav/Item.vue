<template>
  <Link
      :href="href"
      class=" text-center p-4"
      :class="{
          'text-black': active,
          'text-gray-500': !active,
      }"
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