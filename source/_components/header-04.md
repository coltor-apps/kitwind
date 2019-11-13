---
category: headers
min_height: 500px
---

<header class="h-36 min-h-screen flex flex-col items-center justify-center text-center relative">


  <div class="py-24">
    <h1 class="text-5xl font-medium leading-none mb-4">Quas corporis vel est et et</h1>
    <h3 class="text-base font-medium text-gray-600 max-w-3xl">Numquam non omnis quas fugit animi. Optio omnis ut quia
      qui nemo sit
      suscipit asperiores. Aliquam incidunt quam
      beatae quod sapiente beatae officia et quo.</h3>
  </div>

  <div class="absolute bottom-0 left-0 right-0 flex justify-center">
    <a class="mb-8 h-12 w-12 flex items-center justify-center rounded-full text-white bg-{primary}-500 cursor-pointer"
      onclick="console.log(this.parentElement.parentElement.nextElementSibling.scrollIntoView({ behavior: 'smooth'}))">
      <span>▼</span>
    </a>
  </div>
</header>

<div class="h-screen flex items-center justify-center text-gray-400">
  I'm invisible
</div>