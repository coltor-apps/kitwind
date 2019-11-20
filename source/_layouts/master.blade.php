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
              <li class="flex items-center">
                <a href="/builder" class="mr-5 md:mr-8 transition-colors text-white bg-teal-500 hover:bg-teal-600 px-6 py-2 rounded inline-block font-semibold">
                  Builder
                </a>
                <a class="text-gray-600 hover:text-gray-700" href="https://github.com/coltor-apps/kitwind" target="_blank">
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><title>logo-github</title><g><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M23.99845,0.59265C10.74637,0.59265,0,11.33769,0,24.59404 c0,10.60258,6.87606,19.59804,16.41386,22.77204c1.20004,0.22012,1.63806-0.52082,1.63806-1.15686 c0-0.56974-0.02077-2.07903-0.03241-4.08188c-6.67598,1.45035-8.08463-3.21718-8.08463-3.21718 c-1.09131-2.77253-2.66469-3.51067-2.66469-3.51067c-2.17907-1.4891,0.16487-1.4589,0.16487-1.4589 c2.40847,0.16973,3.67612,2.47329,3.67612,2.47329c2.14091,3.66758,5.6171,2.60854,6.98465,1.99416 c0.21805-1.55098,0.83804-2.60854,1.52373-3.20849c-5.32935-0.60569-10.93201-2.66468-10.93201-11.86154 c0-2.62004,0.93513-4.76241,2.47034-6.4401c-0.24678-0.60716-1.07038-3.0473,0.23529-6.35155c0,0,2.01508-0.64532,6.59981,2.46033 c1.91431-0.53232,3.9674-0.79855,6.00842-0.80783c2.03807,0.00928,4.09131,0.27551,6.00842,0.80783 c4.58193-3.10565,6.59333-2.46033,6.59333-2.46033c1.30935,3.30425,0.48561,5.74439,0.23883,6.35155 c1.53816,1.67769,2.46695,3.82007,2.46695,6.4401c0,9.21985-5.61135,11.24863-10.95794,11.84283 c0.86175,0.74094,1.62936,2.20573,1.62936,4.44447c0,3.20848-0.02947,5.79699-0.02947,6.5839 c0,0.64178,0.43228,1.38847,1.65029,1.15406C41.12967,44.18338,48,35.19382,48,24.59404 C48,11.33769,37.25348,0.59265,23.99845,0.59265z"></path></g></svg>
                </a>
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
