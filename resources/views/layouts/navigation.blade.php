<nav class="fixed top-0 left-0 w-64 h-full bg-white border-r border-gray-200 z-50">
    <div class="p-6">
        <div class="flex items-center gap-2 mb-8">
            <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            <h1 class="text-xl font-bold text-gray-900">AgriManager</h1>
        </div>

        <div class="mb-6 p-3 bg-green-50 rounded-lg">
            <p class="text-sm font-medium text-green-800">{{ Auth::user()->name }}</p>
            <p class="text-xs text-green-600 capitalize">{{ Auth::user()->role }}</p>
        </div>

        <nav class="space-y-2">
            <a href="{{ route('dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('dashboard') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                Dashboard
            </a>

            @if(Auth::user()->isAdmin() || Auth::user()->isManager())
            <a href="{{ route('farms.index') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('farms.*') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                Farms
            </a>
            @endif

            <a href="{{ route('fields.index') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('fields.*') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Fields
            </a>

            <a href="{{ route('crops.index') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('crops.*') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                Crops
            </a>

            <!-- Finances Navigation Link -->
            <a href="{{ route('finances.index') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('finances.*') || request()->routeIs('products.*') || request()->routeIs('marketplace.*') || request()->routeIs('sales.*') || request()->routeIs('expenses.*') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                </svg>
                Finances
            </a>

            <!-- Schedule Navigation Link -->
            <a href="{{ route('schedules.index') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('schedules.*') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                Schedule
            </a>

            <!-- Weather Navigation Link -->
            <a href="{{ route('weather.index') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('weather.*') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                </svg>
                Weather
            </a>

            @if(Auth::user()->isAdmin())
            <a href="{{ route('users.index') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('users.*') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
                Users
            </a>
            @endif

            <!-- Settings Navigation Link -->
            <a href="{{ Auth::user()->isAdmin() ? route('settings.index') : route('settings.profile') }}" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors {{ request()->routeIs('settings.*') ? 'bg-green-50 text-green-700 border border-green-200' : 'text-gray-600 hover:bg-gray-50' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Settings
            </a>
        </nav>

        <div class="absolute bottom-6 left-6 right-6">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-left transition-colors text-red-600 hover:bg-red-50">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
