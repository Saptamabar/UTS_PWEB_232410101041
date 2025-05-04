<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-indigo-800">
        <div class="flex items-center justify-center h-16 px-4 gap-4 bg-indigo-900">
            <img src="{{ asset('appicon.svg') }}" alt="" class="h-12 ">
            <span class="text-white font-semibold text-lg">Temanin</span>
        </div>
        <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
            <nav class="flex-1 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-indigo-200 hover:text-white hover:bg-indigo-700 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-indigo-900 text-white' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
                <a href="{{ route('profile') }}" class="flex items-center px-4 py-2 text-indigo-200 hover:text-white hover:bg-indigo-700 rounded-lg {{ request()->routeIs('profile') ? 'bg-indigo-900 text-white' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span class="ml-3">Profile</span>
                </a>
                <a href="{{ 'pengelolaan' }}" class="flex items-center px-4 py-2 text-indigo-200 hover:text-white hover:bg-indigo-700 rounded-lg {{ request()->routeIs('pengelolaan') ? 'bg-indigo-900 text-white' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="ml-3">Pengelolaan</span>
                </a>

            </nav>
        </div>
        <div class="p-4 border-t border-indigo-700">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center w-full px-4 py-2 text-indigo-200 hover:text-white hover:bg-indigo-700 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Mobile navbar -->
<div class="md:hidden fixed w-full bg-indigo-800 z-10">
    <div class="flex items-center justify-between h-16 px-4">
        <span class="text-white font-semibold">Temanin</span>
        <button id="mobile-menu-button" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
    <div id="mobile-menu" class="hidden bg-indigo-700 px-2 py-2">
        <a href="{{ route('dashboard') }}" class="block px-3 py-2 text-white rounded hover:bg-indigo-600  {{ request()->routeIs('dashboard') ? 'bg-indigo-600' : '' }}">Dashboard</a>
        <a href="{{ route('profile') }}" class="block px-3 py-2 text-white rounded hover:bg-indigo-600 {{ request()->routeIs('dashboard') ? 'bg-indigo-600' : '' }}">Profile</a>
        <a href="{{ route('pengelolaan') }}" class="block px-3 py-2 text-white rounded hover:bg-indigo-600 {{ request()->routeIs('dashboard') ? 'bg-indigo-600' : '' }}">Pengelolaan</a>
        <form method="POST" action="{{ route('logout')}}">
            @csrf
            <button type="submit" class="block w-full text-left px-3 py-2 text-white rounded hover:bg-indigo-600">
                Logout
            </button>
        </form>
    </div>
</div>
