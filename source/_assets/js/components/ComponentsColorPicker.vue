<template>
  <div
    :class="{ 'w-full': opened }"
    class="fixed right-0 inset-y-0 flex items-center z-10"
    @click.self="close"
    @keydown.esc="close"
  >
    <div
      :class="{ '-mr-36': !opened }"
      class="transition-all absolute right-0 flex items-center border bg-white rounded rounded-r-none p-1 w-48"
    >
      <button class="ml-1 mr-4 focus:shadow-outline outline-none" @click="opened = !opened">
        <icon-palette :color="currentColor" class="text-gray-600" />
      </button>
      <div class="flex flex-wrap items-center">
        <button
          v-for="color in colors"
          :key="color"
          :class="[`bg-${color}-500`, color === currentColor ? 'w-4 h-4' : 'w-3 h-3' ]"
          class="my-1 mx-px rounded-sm"
          @click="selectColor(color)"
        />
      </div>
    </div>
  </div>
</template>

<script>
import { theme } from '../../../../tailwind.config';
import IconPalette from './icons/IconPalette.vue';
import {
  setComponentsColor,
  getComponentsColor,
} from '../utils/componentsColor';

export default {
  components: {
    IconPalette,
  },
  data: () => ({
    opened: false,
  }),
  computed: {
    colors() {
      return Object.keys(theme.colors).filter(
        color => typeof theme.colors[color] === 'object' && color !== 'gray',
      );
    },
    currentColor: () => getComponentsColor(),
  },
  methods: {
    selectColor(color) {
      this.close();

      setComponentsColor(color);

      setTimeout(() => window.location.reload(), 200);
    },
    close() {
      this.opened = false;
    },
  },
};
</script>