import { getComponentsColor } from '../utils/componentsColor';

export default {
  mounted() {
    this.$slots.default[0].elm.innerHTML = this.$slots.default[0].elm.innerHTML.replace(
      /-{primary}-/g,
      `-${getComponentsColor()}-`,
    );
  },
  render(h) {
    return h('div', this.$scopedSlots.default());
  },
};
