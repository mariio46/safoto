{{-- Navbar --}}
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="{{ route('dashboard') }}" class="flex ml-2 md:mr-24">
                    <img src="{{ asset('../storage/image/default/dashboard-navbar.png') }}" class="h-8 w-24"
                        alt="">
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-10 h-10 rounded-full" oncontextmenu="return false"
                                src="{{ asset('../storage/' . auth()->user()->profile) }}" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 w-60 rounded shadow"
                        id="dropdown-user">
                        <div class="px-4 py-3 text-sm text-gray-900 ">
                            <div>{{ '@' . auth()->user()->username }}</div>
                            <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-800 " aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-gray-100 ">Home</a>
                            </li>
                            @cannot('admin')
                                <li>
                                    <a href="{{ route('pictures.create') }}" class="block px-4 py-2 hover:bg-gray-100 ">New
                                        Picture</a>
                                </li>
                            @endcannot
                            @can('admin')
                                <li>
                                    <a href="{{ route('events.create') }}" class="block px-4 py-2 hover:bg-gray-100 ">New
                                        Event</a>
                                </li>
                                <li>
                                    <a href="{{ route('years.create') }}" class="block px-4 py-2 hover:bg-gray-100 ">New
                                        Year</a>
                                </li>
                                <li>
                                    <a href="{{ route('usersmanagement.create') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 ">New
                                        User</a>
                                </li>
                            @endcan
                            <li>
                                <a href="{{ route('users.index') }}" class="block px-4 py-2 hover:bg-gray-100 ">User
                                    Settings</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <form action="{{ route('signOut') }}" method="post">
                                @csrf
                                <button href="#"
                                    class="inline-block w-full text-left px-4 py-2 text-sm text-gray-800 hover:bg-gray-100  "
                                    type="submit">Sign
                                    out</button>
                            </form>
                        </div>
                        {{-- <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 " role="none">
                                {{ '@' . auth()->user()->username }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate" role="none">
                                {{ auth()->user()->email }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('home') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                                    role="menuitem">Home</a>
                            </li>
                            <li class="group">
                                <form action="{{ route('signOut') }}" method="post" class="group-hover:bg-gray-100">
                                    @csrf
                                    <button class="block px-4 py-2 text-sm text-gray-700 "
                                        role="menuitem">Sign-out</button>
                                </form>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- /Navbar --}}
