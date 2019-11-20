<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      id="viewport"
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Kitwind - {{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" />
    @stack('head')
  </head>
  <body>
    <div id="app" class="px-6 xl:px-0 container mx-auto pt-32">
      <div class="fixed inset-x-0 w-full border-b z-50 bg-white top-0">
        <div class="px-6 xl:px-0">
          <nav class="container mx-auto flex justify-between items-center py-3 relative">
            <a href="/" class="flex items-center">
              <img src="/assets/images/kitwind.svg" class="mr-1 h-12">
              <span class="text-gray-800 font-bold">Kitwind</span>
            </a>
            <button
              onclick="this.nextElementSibling.classList.toggle('hidden')"
              class="px-3 py-2 border-2 rounded text-gray-500 border-gray-500 inline-block md:hidden"
            >
              <svg
                class="fill-current h-3 w-3"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Menu</title>
                <path
                  stroke-width="1"
                  stroke="currentColor"
                  d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"
                />
              </svg>
            </button>
            <ul
              class="w-full max-w-xs hidden absolute right-0 top-0 mt-16 font-medium tracking-wide text-sm text-gray-800 bg-white p-5 shadow rounded z-10 md:max-w-full md:w-auto md:flex md:mt-0 md:relative md:flex-row md:items-center md:bg-transparent md:p-0 md:shadow-none md:rounded-none z-50"
            >
              <li class="mr-10 mb-3 md:mb-0">
                <a
                  href="/"
                  class="hover:text-teal-700 transition-colors @if ($page->isPathActive('')) text-teal-700 @endif"
                  >Home</a
                >
              </li>
              <li class="mr-10 mb-3 md:mb-0 group relative">
                <a
                  href="/components"
                  class="hover:text-teal-700 transition-colors @if ($page->isPathActive('components') || $page->pathContains('components')) text-teal-700 @endif"
                  >Components</a
                >
                <div
                  class="w-48 right-0 items-center absolute hidden md:block invisible transition-all opacity-0 group-hover:opacity-100 group-hover:visible pt-3"
                >
                  <ul class="border rounded bg-white px-4 py-2">
                    @foreach($categories as $category)
                    <li>
                      <a
                        href="{{ $category->getUrl() }}"
                        class="transition-colors text-sm w-full inline-block py-1 hover:text-teal-600"
                      >
                        {{ $category->title }}
                        <span class="opacity-75"
                          >({{ count($category->components($components)) }})</span
                        >
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </li>
              <li>
                <a
                  href="/builder"
                  class="transition-colors text-white bg-teal-500 hover:bg-teal-600 px-6 py-2 rounded inline-block font-semibold"
                  >Builder</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
      @yield('body')
    </div>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @stack('scripts')
  </body>
</html>
