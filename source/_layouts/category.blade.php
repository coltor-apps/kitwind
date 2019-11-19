@extends('_layouts.master') @section('body')
<h1 class="text-3xl md:text-5xl font-bold mb-10">{{ $page->title }}</h1>

@foreach($page->components($components) as $component)
<div class="mb-5">
  @include('_partials.component', ['component' => $component])
</div>
@endforeach

<button
  class="fixed right-0 bottom-0 mb-5 mr-5 w-8 h-8 flex items-center justify-center bg-gray-300 rounded-full z-50 hover:bg-gray-400 transition-colors"
  onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    class="text-gray-600 w-3 h-3"
  >
    <g
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="4"
      fill="currentColor"
      stroke="currentColor"
    >
      <polyline
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
        points="22,17 12,7 2,17 "
        transform="translate(0, 0)"
      />
    </g>
  </svg>
</button>

<components-color-picker></components-color-picker>

@endsection @push('scripts')
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/themes/prism-tomorrow.min.css"
  rel="stylesheet"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/toolbar/prism-toolbar.min.css"
  rel="stylesheet"
/>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/line-numbers/prism-line-numbers.min.css"
  rel="stylesheet"
/>
@endpush @push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/plugins/autoloader/prism-autoloader.min.js"></script>
@endpush
