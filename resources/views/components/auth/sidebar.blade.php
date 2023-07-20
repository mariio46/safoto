<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">

        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="{{ Request::is('auth/dashboard') ? 'bg-gray-100' : '' }} flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            {{-- auth menu --}}
            @include('dashboard.partials.auth-menu')
            {{-- /auth menu --}}
            {{-- admin menu --}}
            @include('dashboard.partials.admin-menu')
            {{-- /admin menu --}}
            <li>
                <a href="{{ route('users.index') }}"
                    class="{{ request()->routeIs('users.*') ? 'bg-gray-100' : '' }} flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">User Settings</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
