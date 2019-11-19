---
category: headers
min_height: 577px
---

<header class="h-screen relative bg-gray-900">
  <div class="container mx-auto px-8 h-full text-center flex flex-col items-center justify-center">
    <h1 class="text-3xl text-gray-200 font-serif font-bold leading-none mb-4 tracking-wide md:text-5xl">
      Quas corporis vel est et et
    </h1>
    <h3 class="text-base text-gray-500 max-w-3xl tracking-wide mb-18">
      Numquam non omnis quas fugit animi. Optio omnis ut quia
      qui nemo sit
      suscipit asperiores. Aliquam incidunt quam
      beatae quod sapiente beatae officia et quo.
    </h3>

    <div class="absolute bottom-0 left-0 right-0 flex justify-center">
      <a class="mb-8 w-10 h-10 flex items-center justify-center rounded-full text-white bg-{primary}-500 hover:bg-{primary}-700 cursor-pointer" onclick="document.getElementById('some-section').scrollIntoView({ behavior: 'smooth'})">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor" stroke="currentColor">
              <polyline points="2 8 12 18 22 8" fill="none" stroke="currentColor" stroke-miterlimit="10"></polyline>
          </g>
        </svg>
      </a>
    </div>
  </div>
</header>

<div id="some-section" class="h-screen flex items-center justify-center items-center text-gray-400 opacity-25">
  I'm Invisible 👀
</div>
