<template>
  <div>
    <slot />
  </div>
</template>

<script>
import { getComponentsColor } from '../utils/componentsColor';

export default {
  mounted() {
    this.$slots.default[0].elm.innerHTML = this.$slots.default[0].elm.innerHTML.replace(
      /-{primary}-/g,
      `-${getComponentsColor()}-`,
    );
  },
};
</script>
