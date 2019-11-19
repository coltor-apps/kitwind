<component-preview name="{{ $component->getFilename() }}" note="{{ $component->note }}">
  <template v-slot:component="{ maxWidth }">
    <iframe
      :style="{ maxWidth }"
      style="min-height: {{ $component->min_height ?? 'auto' }}"
      src="{{ $component->getUrl() }}"
      class="w-full h-full transition-all opacity-0 rounded-lg"
      onload="this.classList.remove('opacity-0');this.classList.add('opacity-100')"
    ></iframe>
  </template>
  <template slot="code">
    <class-replacer>
      <div class="overflow-hidden">
        <pre
          class="rounded shadow max-h-sm text-sm code-toolbar line-numbers"
        ><code class="language-html">{{ $component->getContent() }}</code></pre>
      </div>
    </class-replacer>
  </template>
</component-preview>
