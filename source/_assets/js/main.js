import Vue from 'vue';
import ComponentPreview from './components/ComponentPreview.vue';
import ClassReplacer from './components/ClassReplacer.vue';
import ComponentsColorPicker from './components/ComponentsColorPicker.vue';

Vue.component('component-preview', ComponentPreview);
Vue.component('class-replacer', ClassReplacer);
Vue.component('components-color-picker', ComponentsColorPicker);

new Vue({
  el: '#app',
});
