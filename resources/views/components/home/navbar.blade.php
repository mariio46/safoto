<header id="nav" class=" bg-black nav-fixed w-full z-20 top-0 left-0 md:absolute ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="{{ asset('../storage/image/default/home-navbar.png') }}" class="h-14 mr-3" alt="Safoto Logo">
        </a>
        <div class="flex md:order-2">
            {{-- Login and Dashborad Button --}}
            @auth
                <ul>
                    <li>
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                            class="flex items-center justify-between w-full py-2 text-white text-sm font-semibold rounded md:border-0 md:hover:text-teal-400 md:p-0 md:w-auto"
                            type="button">{{ auth()->user()->username }} <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownHover"
                            class="z-10 hidden bg-gray-950 divide-y divide-gray-800 border border-gray-800 rounded-lg shadow w-52">
                            <div class="px-4 py-3 text-sm text-gray-200 ">
                                <div>{{ '@' . auth()->user()->username }}</div>
                                <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-300 " aria-labelledby="dropdownHoverButton">
                                <li>
                                    <a href="{{ route('dashboard') }}"
                                        class="block px-4 py-2 hover:bg-gray-800 hover:text-gray-200">Dashboard</a>
                                </li>
                                @cannot('admin')
                                    <li>
                                        <a href="{{ route('pictures.create') }}"
                                            class="block px-4 py-2 hover:bg-gray-800 hover:text-gray-200">New
                                            Picture</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pictures.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-800 hover:text-gray-200">My
                                            Pictures</a>
                                    </li>
                                @endcannot
                                @can('admin')
                                    <li>
                                        <a href="{{ route('events.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-800 hover:text-gray-200">New
                                            Event</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('years.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-800 hover:text-gray-200">New
                                            Year</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ route('usersmanagement.index') }}"class="block px-4 py-2 hover:bg-gray-800 hover:text-gray-200">New
                                            User</a>
                                    </li>
                                @endcan
                                <li>
                                    <a href="{{ route('users.index') }}"
                                        class="block px-4 py-2 hover:bg-gray-800 hover:text-gray-200">User
                                        Settings</a>
                                </li>
                            </ul>
                            <div class="py-2">
                                <form action="{{ route('signOut') }}" method="post">
                                    @csrf
                                    <button href="#"
                                        class="inline-block w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-gray-200 "
                                        type="submit">Sign
                                        out</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            @else
                <a href="{{ route('signin') }}"
                    class="text-white bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-lg text-sm px-[16px] min-[375px]:px-[18px] py-2 text-center mr-3 md:mr-0 sm:hover:scale-[1.25] transition duration-300 ease-in-out">
                    Sign-In
                </a>
            @endauth
            {{-- /Login and Dashborad Button --}}

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium  rounded-lg  md:flex-row md:space-x-8 md:mt-0 ">
                @foreach ($navMenu as $menu => $url)
                    <li>
                        <a href="{{ $url }}"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 hover:text-black md:hover:bg-transparent md:hover:text-teal-400 md:p-0 ">
                            {{ $menu }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
