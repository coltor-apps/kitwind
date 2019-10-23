<template>
  <button
    :class="active ? 'text-gray-800' : 'text-gray-500'"
    class="p-2 text-xs pb-3 font-medium outline-none border-r last:border-r-0 focus:shadow-outline transition-colors"
    @click="$emit('click')"
  >
    <slot />
  </button>
</template>

<script>
export default {
  props: {
    active: {
      type: Boolean,
      required: true,
    },
  },
};
</script>
