<template>
  <div class="inline-block" @mouseover="markAsHovered" @mouseleave="markAsNotHovered">
    <slot />
    <transition
      enter-class="opacity-0"
      enter-active-class="transition-opacity"
      enter-to-class="opacity-100"
      leave-class="opacity-100"
      leave-active-class="transition-opacity"
      leave-to-class="opacity-0"
    >
      <div v-if="hovered" class="z-50 relative flex justify-center">
        <div class="absolute pt-3 rounded w-64 mx-auto">
          <div class="shadow border bg-white rounded bg-white px-3 py-2 text-xs">
            <slot name="content" />
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
export default {
  data: () => ({
    hovered: false,
  }),
  methods: {
    markAsHovered() {
      this.hovered = true;
    },
    markAsNotHovered() {
      this.hovered = false;
    },
  },
};
</script>