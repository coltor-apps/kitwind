---
title: Page Builder
extends: _layouts.master
section: body
---

<div class="flex items-end md:items-start">
  <h1 class="text-2xl md:text-5xl font-bold mr-5">Page Builder</h1>
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="64"
    height="64"
    viewBox="0 0 64 64"
    class="text-gray-900 opacity-0 transition-opacity transition-1000 transition-delay-250"
    id="crane"
  >
    <g
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      fill="currentColor"
      stroke="currentColor"
    >
      <rect
        x="48"
        y="42"
        width="12"
        height="6"
        fill="none"
        stroke-miterlimit="10"
        data-color="color-2"
      />
      <line
        x1="54"
        y1="28"
        x2="54"
        y2="42"
        fill="none"
        stroke-miterlimit="10"
        data-color="color-2"
      />
      <polyline
        points="23 23 23 59 14 59 14 23"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
      />
      <line
        x1="6"
        y1="59"
        x2="31"
        y2="59"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
      />
      <polyline
        points="27 14 60 17 60 23 4 23 4 16 10 14"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
        data-cap="butt"
      />
      <line
        x1="23"
        y1="23"
        x2="14"
        y2="32"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
        data-cap="butt"
      />
      <line
        x1="23"
        y1="41"
        x2="14"
        y2="50"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
        data-cap="butt"
      />
      <line
        x1="23"
        y1="41"
        x2="14"
        y2="32"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
        data-cap="butt"
      />
      <line
        x1="23"
        y1="59"
        x2="14"
        y2="50"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
        data-cap="butt"
      />
      <polyline
        points="10 23 10 5 24 5 27 14 27 23"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
      />
      <path
        d="M16,5v5a4,4,0,0,0,4,4h7"
        fill="none"
        stroke="currentColor"
        stroke-miterlimit="10"
        data-cap="butt"
      />
    </g>
  </svg>
</div>
<p>
  This module is under active development. And yes, it will cost
  <span class="font-bold">$<span id="price">0</span> forever.</span>
  <a href="#" target="_blank" class="text-indigo-700">Stay tuned</a
  ><svg
    xmlns="http://www.w3.org/2000/svg"
    width="48"
    height="48"
    viewBox="0 0 48 48"
    class="inline-block w-5 h-5 ml-2 text-indigo-600 -mt-px"
  >
    <path
      fill="currentColor"
      d="M48,9.11341c-1.76603,0.78322-3.66389,1.31268-5.65607,1.55067 c2.03332-1.21873,3.5948-3.14867,4.33001-5.44828c-1.90268,1.12855-4.01024,1.94811-6.25344,2.3898 c-1.79636-1.914-4.35574-3.10992-7.18805-3.10992c-5.43885,0-9.84807,4.40923-9.84807,9.84756 c0,0.77191,0.0871,1.5234,0.25495,2.24422c-8.1844-0.41065-15.4407-4.33121-20.29778-10.28923 C2.49387,7.75272,2.0083,9.44432,2.0083,11.24909c0,3.41649,1.73858,6.43073,4.38093,8.19676 c-1.61427-0.05109-3.13272-0.49415-4.4605-1.23177c-0.00069,0.04115-0.00084,0.08231-0.00084,0.1238 c0,4.77144,3.39452,8.75168,7.8996,9.6563c-0.82642,0.22494-1.69641,0.34532-2.5945,0.34532 c-0.63458,0-1.25149-0.06173-1.8528-0.17661c1.25319,3.91234,4.89001,6.75958,9.19929,6.83914 c-3.37036,2.64116-7.61654,4.21549-12.23032,4.21549C1.55427,39.21751,0.77036,39.17088,0,39.08 c4.35814,2.79408,9.53447,4.42431,15.09573,4.42431c18.11374,0,28.0189-15.00571,28.0189-28.01916 c0-0.42694-0.00959-0.85164-0.02846-1.27394C45.01011,12.82274,46.67978,11.08826,48,9.11341z"
    />
  </svg>
</p>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/countup@1.8.2/dist/countUp.min.js"></script>
<script type="text/javascript">
  const illustrationId = 'crane';
  new Vivus(illustrationId, { duration: 100 });
  const illustrationClassList = document.getElementById(illustrationId)
    .classList;
  illustrationClassList.remove('opacity-0');
  illustrationClassList.add('opacity-100');
  new CountUp('price', 9999, 0, 2, 5).start();
</script>
@endpush
