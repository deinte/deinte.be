<template>
  <Link
      :href="href"
      class=" text-center py-2 sm:p-4 last:pr-0"
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
