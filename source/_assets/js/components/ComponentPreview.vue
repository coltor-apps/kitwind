<template>
  <div :id="name" class="group">
    <div class="flex justify-between -mb-1">
      <a
        :href="`#${name}`"
        class="absolute text-xs -ml-5 xl:-ml-8 mt-2 text-gray-500 focus:shadow-outline opacity-50 group-hover:opacity-100"
      >
        <icon-link class="w-4 h-4" />
      </a>
      <div class="hidden lg:block border rounded-t">
        <component-preview-button
          v-for="(width, index) in screenWidths"
          :key="index"
          :active="width === componentMaxWidth"
          @click="selectComponentMaxWidth(width)"
        >
          <component :is="screenWidthIcons[width]" class="h-4" />
        </component-preview-button>
      </div>
      <div class="border rounded">
        <component-preview-button
          v-for="tab in tabs"
          :key="tab.id"
          :active="tab.id === activeTabId"
          @click="activeTabId = tab.id"
        >{{ tab.label }}</component-preview-button>
      </div>
    </div>
    <div
      v-for="(tab, index) in tabs"
      :key="index"
      v-show="tab.id === activeTabId"
      class="p-5 rounded-b z-10 relative border bg-white"
    >
      <slot :name="tab.id" :max-width="componentMaxWidth" />
    </div>
  </div>
</template>

<script>
import { theme } from '../../../../tailwind.config';
import IconPhone from './icons/IconPhone.vue';
import IconTablet from './icons/IconTablet.vue';
import IconLaptop from './icons/IconLaptop.vue';
import IconDesktop from './icons/IconDesktop.vue';
import IconLink from './icons/IconLink.vue';
import ComponentPreviewButton from './ComponentPreviewButton.vue';

const tabs = [
  {
    id: 'component',
    label: 'Preview',
  },
  {
    id: 'code',
    label: 'Code',
  },
];

const smScreenWidth = theme.screens.sm.replace('px', '') / 2 + 'px';

export default {
  components: {
    IconPhone,
    IconTablet,
    IconLaptop,
    IconDesktop,
    IconLink,
    ComponentPreviewButton,
  },
  props: {
    name: {
      type: String,
      required: true,
    },
  },
  data: () => ({
    activeTabId: tabs[0].id,
    componentMaxWidth: theme.screens.xl,
  }),
  computed: {
    tabs: () => tabs,
    screenWidthIcons: () => ({
      [smScreenWidth]: 'icon-phone',
      [theme.screens.md]: 'icon-tablet',
      [theme.screens.lg]: 'icon-laptop',
      [theme.screens.xl]: 'icon-desktop',
    }),
    screenWidths: () =>
      Object.values({
        ...theme.screens,
        sm: smScreenWidth,
      }),
  },
  methods: {
    selectComponentMaxWidth(width) {
      this.componentMaxWidth = width;

      this.activeTabId = 'component';
    },
  },
};
</script>
