---
category: navs
min_height: 324px
---

<div>
  <nav class="py-3 relative border-b text-xs z-20">
    <ul class="flex justify-end items-center text-gray-700">
      <li class="relative group px-5">
        <a href="#" class="hover:text-{primary}-700 group-hover:text-{primary}-700 flex items-center">
          <svg class="w-4 h-4 md:mr-2 text-gray-600 group-hover:text-{primary}-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor" stroke="currentColor"><circle data-color="color-2" data-stroke="none" cx="6" cy="22" r="1" stroke="none"/> <circle data-color="color-2" data-stroke="none" cx="20" cy="22" r="1" stroke="none"/> <circle data-color="color-2" cx="6" cy="22" r="1" fill="none" stroke-miterlimit="10"/> <circle data-color="color-2" cx="20" cy="22" r="1" fill="none" stroke-miterlimit="10"/> <polyline points="4.8 7 22 7 20 17 6 17 4 2 1 2" fill="none" stroke="currentColor" stroke-miterlimit="10"/></g></svg>
          <span class="hidden md:inline-block">Cart</span>
        </a>
        <div class="w-48 right-0 items-center absolute invisible opacity-0 group-hover:opacity-100 group-hover:visible pt-4">
          <ul class="border rounded bg-white px-4 py-2">
            <li class="flex items-center justify-between py-1">
              <a href="#" class="text-xs w-full flex items-center hover:text-{primary}-700">
                <span class="w-5 h-5 bg-center bg-cover rounded-full bg-gray-300 mr-2"></span>
                A cool item
              </a>
              <a href="#" class="hover:text-{primary}-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="w-3 h-3">
                  <g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor" stroke="currentColor">
                    <line fill="none" stroke="currentColor" stroke-miterlimit="10" x1="19" y1="5" x2="5" y2="19"></line>
                    <line fill="none" stroke="currentColor" stroke-miterlimit="10" x1="19" y1="19" x2="5" y2="5"></line>
                  </g>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="relative group">
        <a href="#" class="group-hover:text-{primary}-700 flex items-center">
          <svg class="w-4 h-4 md:mr-2 text-gray-600 group-hover:text-{primary}-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor" stroke="currentColor"><path fill="none" stroke="currentColor" stroke-miterlimit="10" d="M12,12L12,12 c-2.761,0-5-2.239-5-5V6c0-2.761,2.239-5,5-5h0c2.761,0,5,2.239,5,5v1C17,9.761,14.761,12,12,12z"/> <path data-color="color-2" fill="none" stroke-miterlimit="10" d="M22,20.908 c0-1.8-1.197-3.383-2.934-3.856C17.172,16.535,14.586,16,12,16s-5.172,0.535-7.066,1.052C3.197,17.525,2,19.108,2,20.908V23h20 V20.908z"/></g></svg>
          <span class="hidden md:inline-block">Account</span>
        </a>
        <div class="w-48 right-0 items-center absolute invisible opacity-0 group-hover:opacity-100 group-hover:visible pt-4">
          <ul class="border rounded bg-white px-4 py-2">
            <li>
              <a href="#" class="text-xs w-full inline-block py-1 hover:text-{primary}-700 flex items-center">
                <svg class="mr-2 w-4 h-4 opacity-75" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>logout</title><g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor" stroke="currentColor"><line data-color="color-2" fill="none" stroke-miterlimit="10" x1="9" y1="12" x2="21" y2="12"></line> <polyline data-color="color-2" fill="none" stroke-miterlimit="10" points=" 17,16 21,12 17,8 "></polyline> <polyline fill="none" stroke="currentColor" stroke-miterlimit="10" points="19,4 19,1 5,1 5,23 19,23 19,20 "></polyline></g></svg>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>

  <nav class="flex justify-between items-center py-5 relative">
    <a href="#" class="flex items-center">
      <svg class="text-{primary}-500 mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
        <g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor" stroke="currentColor">
          <polygon points="19 3 4 19 15 19 13 29 28 13 17 13 19 3" fill="none" stroke="currentColor" stroke-miterlimit="10"></polygon>
        </g>
      </svg>
      <span class="text-gray-800 font-bold">Logo</span>
    </a>
    <button onclick="this.nextElementSibling.classList.toggle('hidden')" class="px-3 py-2 border-2 rounded text-gray-500 border-gray-500 inline-block md:hidden">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Menu</title>
        <path stroke-width="1" stroke="currentColor" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </button>
    <ul class="w-full max-w-xs hidden absolute right-0 top-0 mt-16 font-medium tracking-wide text-sm text-gray-800 bg-white p-5 shadow rounded z-10 md:max-w-full md:w-auto md:flex md:mt-0 md:relative md:flex-row md:items-center md:bg-transparent md:p-0 md:shadow-none md:rounded-none">
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
        <a href="#"class="text-white bg-{primary}-500 hover:bg-{primary}-600 px-6 py-2 rounded inline-block font-semibold">Sign
          Up
        </a>
      </li>
    </ul>
  </nav>
</div>
