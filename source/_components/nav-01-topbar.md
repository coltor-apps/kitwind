---
category: navs
min_height: 324px
note: Make sure to enable the "group-hover" variant for "textColor" and "visibility".
---

<nav>
  <div class="flex justify-between relative border-b text-xs z-20">
    <div class="container mx-auto flex justify-between py-3 px-8">
      <ul class="flex">
        <li class="relative group text-gray-700">
          <a href="#" class="group-hover:text-{primary}-700 flex items-center">
            <svg class="w-4 h-4 md:mr-2 text-gray-600 group-hover:text-{primary}-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <g fill="currentColor">
                <path d="M17,11.94q-.16.626-.922,3.091h1.86q-.719-2.309-.808-2.612C17.072,12.218,17.028,12.058,17,11.94Z" fill="currentColor"></path>
                <path d="M22,8H12a2,2,0,0,0-2,2v9a2,2,0,0,0,2,2h6l4,3V21a2,2,0,0,0,2-2V10A2,2,0,0,0,22,8ZM18.819,18,18.3,16.3H15.7L15.181,18H13.55l2.52-7.168h1.85L20.45,18Z" fill="currentColor"></path>
                <path d="M12,0H2A2,2,0,0,0,0,2v9a2,2,0,0,0,2,2v3l4-3H9V10a2.828,2.828,0,0,1,.04-.393A9.23,9.23,0,0,1,7.056,8.529,10.268,10.268,0,0,1,3.874,10a4.633,4.633,0,0,0-.768-1.415A8.7,8.7,0,0,0,5.944,7.537,7,7,0,0,1,4.913,6.074a7.077,7.077,0,0,1-.552-1.367c-.471,0-.743.016-1.143.048V3.308a9.853,9.853,0,0,0,1.159.056H6.145v-.48a2.482,2.482,0,0,0-.048-.5H7.7a2.445,2.445,0,0,0-.048.487v.488h1.9a9.774,9.774,0,0,0,1.159-.056V4.755c-.352-.032-.664-.048-1.135-.048A6.278,6.278,0,0,1,9.039,6.25a5.924,5.924,0,0,1-.888,1.3A6.958,6.958,0,0,0,9.617,8.2,2.987,2.987,0,0,1,12,7h2V2A2,2,0,0,0,12,0Z"></path>
                <path d="M7.016,6.642a4.51,4.51,0,0,0,1-1.935H5.9A4.562,4.562,0,0,0,7.016,6.642Z"></path>
              </g>
            </svg>
            <span class="hidden md:inline-block">English</span>
          </a>
          <div class="w-32 left-0 items-center absolute invisible group-hover:visible pt-4">
            <ul class="shadow rounded bg-white text-gray-700 px-4 py-2">
              <li>
                <a href="#" class="text-xs w-full inline-block py-1 font-semibold text-{primary}-700 flex items-center">
                  English
                </a>
              </li>
              <li>
                <a href="#" class="text-xs w-full inline-block py-1 hover:text-{primary}-700 flex items-center">
                  Spanish
                </a>
              </li>
              <li>
                <a href="#" class="text-xs w-full inline-block py-1 hover:text-{primary}-700 flex items-center">
                  Russian
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <ul class="flex">
        <li class="relative group text-gray-700 mr-5">
          <a href="#" class="hover:text-{primary}-700 group-hover:text-{primary}-700 flex items-center">
            <svg class="w-4 h-4 md:mr-2 text-gray-600 group-hover:text-{primary}-700" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                <path d="M3,5 L4.33333333,9 L4,9 C2.34314575,9 1,10.3431458 1,12 C1,13.6568542 2.34314575,15 4,15 L17,15 L17,13 L4.00684547,13 C3.45078007,13 3,12.5561352 3,12 C3,11.4477153 3.44748943,11 3.99850233,11 L10.5,11 L17,11 L20,2 L4,2 L4,0.997030139 C4,0.453036308 3.54809015,0 2.9906311,0 L0,0 L0,2 L2,2 L3,5 Z M5,20 C6.1045695,20 7,19.1045695 7,18 C7,16.8954305 6.1045695,16 5,16 C3.8954305,16 3,16.8954305 3,18 C3,19.1045695 3.8954305,20 5,20 Z M15,20 C16.1045695,20 17,19.1045695 17,18 C17,16.8954305 16.1045695,16 15,16 C13.8954305,16 13,16.8954305 13,18 C13,19.1045695 13.8954305,20 15,20 Z" id="Combined-Shape"></path>
              </g>
            </svg>
            <span class="hidden md:inline-block">Cart</span>
          </a>
          <div class="w-48 md:w-64 right-0 items-center absolute invisible group-hover:visible pt-4">
            <ul class="shadow rounded bg-white text-gray-700 px-4 py-2">
              <li class="flex items-center justify-between py-1 px-1">
                <a href="#" class="text-xs w-full flex items-center hover:text-{primary}-700">
                  <span class="w-5 h-5 bg-center bg-cover rounded-full bg-gray-300 mr-2"></span>
                  <span class="inline-block truncate w-24 md:w-40">Something very cool and awesome</span>
                </a>
                <a href="#" class="text-gray-600 hover:text-{primary}-700">
                  <svg class="w-4 h-4" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                      <path d="M11.4142136,10 L14.2426407,7.17157288 L12.8284271,5.75735931 L10,8.58578644 L7.17157288,5.75735931 L5.75735931,7.17157288 L8.58578644,10 L5.75735931,12.8284271 L7.17157288,14.2426407 L10,11.4142136 L12.8284271,14.2426407 L14.2426407,12.8284271 L11.4142136,10 L11.4142136,10 Z M2.92893219,17.0710678 C6.83417511,20.9763107 13.1658249,20.9763107 17.0710678,17.0710678 C20.9763107,13.1658249 20.9763107,6.83417511 17.0710678,2.92893219 C13.1658249,-0.976310729 6.83417511,-0.976310729 2.92893219,2.92893219 C-0.976310729,6.83417511 -0.976310729,13.1658249 2.92893219,17.0710678 L2.92893219,17.0710678 Z M4.34314575,15.6568542 C7.46734008,18.7810486 12.5326599,18.7810486 15.6568542,15.6568542 C18.7810486,12.5326599 18.7810486,7.46734008 15.6568542,4.34314575 C12.5326599,1.21895142 7.46734008,1.21895142 4.34314575,4.34314575 C1.21895142,7.46734008 1.21895142,12.5326599 4.34314575,15.6568542 L4.34314575,15.6568542 Z" id="Combined-Shape-Copy"></path>
                    </g>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="relative group text-gray-700">
          <a href="#" class="group-hover:text-{primary}-700 flex items-center">
            <svg class="w-4 h-4 md:mr-2 text-gray-600 group-hover:text-{primary}-700" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                <path d="M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z M6.99999861,6.00166547 C6.99999861,4.34389141 8.3465151,3 9.99999722,3 C11.6568507,3 12.9999958,4.33902013 12.9999958,6.00166547 L12.9999958,7.99833453 C12.9999958,9.65610859 11.6534793,11 9.99999722,11 C8.34314374,11 6.99999861,9.66097987 6.99999861,7.99833453 L6.99999861,6.00166547 Z M3.34715433,14.4444439 C5.37306718,13.5169611 7.62616222,13 10,13 C12.3738388,13 14.6269347,13.5169615 16.6528458,14.4444437 C15.2177146,16.5884188 12.7737035,18 10,18 C7.22629656,18 4.78228556,16.5884189 3.34715433,14.4444439 L3.34715433,14.4444439 Z" id="Combined-Shape"></path>				
              </g>
            </svg>
            <span class="hidden md:inline-block">Account</span>
          </a>
          <div class="w-32 right-0 items-center absolute invisible group-hover:visible pt-4">
            <ul class="shadow rounded bg-white text-gray-700 px-4 py-2">
              <li>
                <a href="#" class="text-xs w-full inline-block py-1 hover:text-{primary}-700 flex items-center">
                  <svg class="mr-2 w-4 h-4 opacity-75" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <g fill="currentColor">
                        <path d="M8,24a.988.988,0,0,1-.581-.187l-7-5A1,1,0,0,1,0,18V1A1,1,0,0,1,1,0c.388,0,1.185.624,1.316.718L8.582,5.2A1,1,0,0,1,9,6.016V23a1,1,0,0,1-.542.89A1.019,1.019,0,0,1,8,24Z" fill="currentColor"></path>
                        <path d="M11,13v6h3a1,1,0,0,0,1-1V13Z" fill="currentColor"></path>
                        <path d="M11,6.016V7h4V1a1,1,0,0,0-1-1H4.751l5,3.576A3.013,3.013,0,0,1,11,6.016Z" fill="currentColor"></path>
                        <polygon points="24 10 18 5 18 9 11 9 11 11 18 11 18 15 24 10"></polygon>
                    </g>
                  </svg>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="container mx-auto py-5 px-8">
    <div class="relative flex justify-between items-center">
      <a href="#" class="flex items-center">
        <svg class="text-{primary}-500 mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
          <g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor" stroke="currentColor">
            <polygon points="19 3 4 19 15 19 13 29 28 13 17 13 19 3" fill="none" stroke="currentColor" stroke-miterlimit="10"></polygon>
          </g>
        </svg>
        <span class="text-gray-800 font-bold">Logo</span>
      </a>
      <button onclick="this.nextElementSibling.classList.toggle('hidden')" class="px-3 py-2 border rounded text-gray-500 border-gray-500 inline-block md:hidden">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path stroke-width="1" stroke="currentColor" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
      <ul class="w-full max-w-xs hidden absolute right-0 top-0 mt-12 font-medium tracking-wide text-sm text-gray-800 bg-white p-5 shadow rounded z-10 md:max-w-full md:w-auto md:flex md:mt-0 md:relative md:flex-row md:items-center md:bg-transparent md:p-0 md:shadow-none md:rounded-none">
        <li class="mr-10 mb-3 md:mb-0">
          <a href="#" class="hover:text-{primary}-700">Home</a>
        </li>
        <li class="mr-10 mb-3 md:mb-0">
          <a href="#" class="hover:text-{primary}-700">About</a>
        </li>
        <li class="mr-10 mb-3 md:mb-0">
          <a href="#" class="hover:text-{primary}-700">Contact Us</a>
        </li>
        <li class="mr-10 mb-3 md:mb-0">
          <a href="#" class="hover:text-{primary}-700">Sign In</a>
        </li>
        <li>
          <a href="#"class="text-white bg-{primary}-500 hover:bg-{primary}-600 px-6 py-2 rounded inline-block font-semibold">
            Sign Up
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
