<nav class="bg-white shadow" x-data="{ isOpen: false }">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button @click="isOpen = !isOpen" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white" aria-label="Main menu" aria-expanded="false">
            <!-- Icon when menu is closed. -->
            <svg x-show="!isOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <!-- Icon when menu is open. -->
            <svg x-show="isOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
        <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0">
            @include('components.logo', ['attributes' => 'class = "w-auto h-8 text-orange-600"'])
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4 font-medium leading-5 text-gray-400">
              <a href="{{ url('/dashboard') }}" class="px-3 py-2 text-sm transition duration-200 ease-in-out rounded-md hover:text-gray-800 focus:outline-none hover:bg-gray-100 shadow-none hover:shadow-inner {{ setActive('dashboard', 'nav-active') }}">Dashboard
              </a>
              <a href="{{ url('/team') }}" class="px-3 py-2 text-sm transition duration-200 ease-in-out rounded-md hover:text-gray-800 focus:outline-none hover:bg-gray-100 shadow-none hover:shadow-inner {{ setActive('team', 'nav-active') }}">Team
              </a>
              <a href="{{ url('/projects') }}" class="px-3 py-2 text-sm transition duration-200 ease-in-out rounded-md hover:text-gray-800 focus:outline-none hover:bg-gray-100 shadow-none hover:shadow-inner {{ setActive('projects', 'nav-active') }}">Projects
              </a>
              <a href="{{ url('/calendar') }}" class="px-3 py-2 text-sm transition duration-200 ease-in-out rounded-md hover:text-gray-800 focus:outline-none hover:bg-gray-100 shadow-none hover:shadow-inner {{ setActive('calendar', 'nav-active') }}">Calendar
              </a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button class="p-1 text-gray-400 transition duration-150 ease-in-out border-2 border-transparent rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700" aria-label="Notifications">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
          </button>

          <!-- Profile dropdown -->
          @include('components.profile_avatar')
        </div>
      </div>
    </div>

    <!--
      Mobile menu, toggle classes based on menu state.

      Menu open: "block", Menu closed: "hidden"
    -->
    <div
        class="h-screen sm:hidden"
        :class="{ 'hidden': !isOpen, 'block': isOpen }"
        @click.away="isOpen = false"
    >
      <div class="px-2 pt-2 pb-3">
        <a href="#" class="block px-3 py-2 text-base font-medium text-white transition duration-150 ease-in-out bg-gray-900 rounded-md focus:outline-none focus:text-white focus:bg-gray-700">Dashboard
        </a>
        <a href="#" class="block px-3 py-2 mt-1 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Team
        </a>
        <a href="#" class="block px-3 py-2 mt-1 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Projects
        </a>
        <a href="#" class="block px-3 py-2 mt-1 text-base font-medium text-gray-300 transition duration-150 ease-in-out rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Calendar
        </a>
      </div>
    </div>
</nav>
