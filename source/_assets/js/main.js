import Vue from 'vue';
import ComponentPreview from './components/ComponentPreview.vue';
import ComponentsColorPicker from './components/ComponentsColorPicker.vue';
import ClassReplacer from './components/ClassReplacer';

Vue.component('component-preview', ComponentPreview);
Vue.component('class-replacer', ClassReplacer);
Vue.component('components-color-picker', ComponentsColorPicker);

new Vue({
  el: '#app',
});

window.location.replace("https://kitwind.io/");
