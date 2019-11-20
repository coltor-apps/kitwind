---
category: navs
min_height: 281px
---

<nav class="bg-gray-900">
  <div class="container mx-auto px-8 py-5">
    <div class="relative flex justify-between items-center">
      <a href="#" class="flex items-center">
        <svg
          class="text-{primary}-500 mr-2"
          xmlns="http://www.w3.org/2000/svg"
          width="32"
          height="32"
          viewBox="0 0 32 32"
        >
          <g
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            fill="currentColor"
            stroke="currentColor"
          >
            <polygon
              points="19 3 4 19 15 19 13 29 28 13 17 13 19 3"
              fill="none"
              stroke="currentColor"
              stroke-miterlimit="10"
            />
          </g>
        </svg>
        <span class="text-white font-bold">Logo</span>
      </a>
      <button
        onclick="this.nextElementSibling.classList.toggle('hidden')"
        class="px-3 py-2 border rounded text-gray-500 border-gray-500 inline-block md:hidden"
      >
        <svg
          class="fill-current text-gray-400 h-3 w-3"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <title>Menu</title>
          <path stroke-width="1" stroke="currentColor" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
      <div
        class="w-full max-w-xs hidden absolute right-0 top-0 mt-12 font-medium tracking-wide text-sm text-gray-800 bg-white p-5 shadow rounded z-10 md:text-gray-400 md:max-w-full md:ml-12 md:flex md:mt-0 md:relative md:flex-row md:items-center md:bg-transparent md:p-0 md:shadow-none md:rounded-none"
      >
        <ul class="flex flex-col md:flex-row mx-auto">
          <li class="mr-10 mb-3 md:mb-0">
            <a href="#" class="hover:text-{primary}-500">Home</a>
          </li>
          <li class="mr-10 mb-3 md:mb-0">
            <a href="#" class="hover:text-{primary}-500">About</a>
          </li>
          <li class="mr-10 mb-3 md:mb-0">
            <a href="#" class="hover:text-{primary}-500">Contact Us</a>
          </li>
          <li class="mr-10 mb-3 md:mb-0">
            <a href="#" class="hover:text-{primary}-500">Sign In</a>
          </li>
        </ul>
        <ul class="flex md:items-center flex-col md:flex-row">
          <li>
            <a href="#" class="text-white bg-{primary}-500 hover:bg-{primary}-600 px-6 py-2 rounded inline-block font-semibold">
              Sign Up
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
