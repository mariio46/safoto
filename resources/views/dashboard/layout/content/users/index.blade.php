<x-auth-layout title="Your Profile">

    <div class="grid grid-cols-1 xl:grid-cols-3 xl:gap-4">
        <div class="mb-4 col-span-full xl:mb-2">
            <x-auth.header title="User Setting's" link="{{ route('users.edit', auth()->user()) }}" body="Update">
            </x-auth.header>
        </div>
        <!-- Right Content -->
        <div class="col-span-full xl:col-auto">
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                <div class="flex items-center justify-center ">
                    <img class="mb-4 rounded-lg w-52 h-auto  sm:mb-0 xl:mb-4 2xl:mb-0"
                        src="{{ asset('../storage/' . auth()->user()->profile) }}" alt="{{ auth()->user()->username }}">
                </div>
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                <h3 class="mb-4 text-xl font-semibold ">User Info</h3>
                <div class="mb-4">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input type="text" name="username" id="username"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Bonnie" readonly disabled required value="{{ auth()->user()->username }}">
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                        placeholder="Bonnie" readonly disabled required value="{{ auth()->user()->email }}">
                </div>
            </div>
        </div>

        @if ($biodata->count())
            <div class="col-span-2">
                @foreach ($biodata as $bio)
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                        <h3 class="mb-4 text-xl font-semibold ">General information</h3>
                        <form action="#">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 ">Full
                                        Name</label>
                                    <input type="text" name="first-name" id="first-name"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic "
                                        required readonly disabled required
                                        @if ($bio->fullName) value="{{ $bio->fullName }}" @else placeholder="Fullname not found...!" @endif>
                                </div>
                                <div class="col-span-6
                            sm:col-span-3">
                                    <label for="last-name"
                                        class="block mb-2 text-sm font-medium text-gray-900">Birthday</label>
                                    <input type="text" name="last-name" id="last-name"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                                        requiredreadonly disabled required
                                        @if ($bio->birthDay) value="{{ $bio->birthDay }}" @else placeholder="Birthday not found...!" @endif>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="birthCity"
                                        class="block mb-2 text-sm font-medium text-gray-900">City</label>
                                    <input type="text" name="birthCity" id="birthCity"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                                        required readonly disabled required
                                        @if ($bio->birthCity) value="{{ $bio->birthCity }}" @else placeholder="City not found...!" @endif>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="instagram"
                                        class="block mb-2 text-sm font-medium text-gray-900">Intagram</label>
                                    <input type="text" name="instagram" id="instagram"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                                        required readonly disabled required
                                        @if ($bio->instagram) value="{{ $bio->instagram }}" @else placeholder="Instagram not found...!" @endif>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="facebook"
                                        class="block mb-2 text-sm font-medium text-gray-900">Facebook</label>
                                    <input type="text" name="facebook" id="facebook"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                                        required readonly disabled required
                                        @if ($bio->facebook) value="{{ $bio->facebook }}" @else placeholder="Facebook not found...!" @endif>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tiktok"
                                        class="block mb-2 text-sm font-medium text-gray-900">Titok</label>
                                    <input type="text" name="tiktok" id="tiktok"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                                        required readonly disabled required
                                        @if ($bio->tiktok) value="{{ $bio->tiktok }}" @else placeholder="Tiktok not found...!" @endif>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:px-6 sm:pt-6 sm:pb-8">
                    <h3 class="mb-4 text-xl font-semibold ">Password information</h3>
                    <form action="#">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="current-password"
                                    class="block mb-2 text-sm font-medium text-gray-900">Current
                                    password</label>
                                <input type="text" name="current-password" id="current-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                                    placeholder="••••••••" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">New
                                    password</label>
                                <input data-popover-target="popover-password" data-popover-placement="bottom"
                                    type="password" id="password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    placeholder="••••••••" required>
                                <div data-popover id="popover-password" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                    <div class="p-3 space-y-2">
                                        <h3 class="font-semibold text-gray-900">Must have at least 6 characters
                                        </h3>
                                        <div class="grid grid-cols-4 gap-2">
                                            <div class="h-1 bg-orange-300"></div>
                                            <div class="h-1 bg-orange-300"></div>
                                            <div class="h-1 bg-gray-200"></div>
                                            <div class="h-1 bg-gray-200"></div>
                                        </div>
                                        <p>It’s better to have:</p>
                                        <ul>
                                            <li class="flex items-center mb-1">
                                                <svg class="w-4 h-4 mr-2 text-green-400 " aria-hidden="true"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Upper & lower case letters
                                            </li>
                                            <li class="flex items-center mb-1">
                                                <svg class="w-4 h-4 mr-2 text-gray-300 " aria-hidden="true"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                A symbol (#$&)
                                            </li>
                                            <li class="flex items-center">
                                                <svg class="w-4 h-4 mr-2 text-gray-300 " aria-hidden="true"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                A longer password (min. 12 chars.)
                                            </li>
                                        </ul>
                                    </div>
                                    <div data-popper-arrow></div>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="confirm-password"
                                    class="block mb-2 text-sm font-medium text-gray-900">Confirm
                                    password</label>
                                <input type="text" name="confirm-password" id="confirm-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                                    placeholder="••••••••" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="col-span-2">
                <div
                    class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:px-6 sm:py-6">
                    <h3 class="text-lg font-semibold ">You didn't have biodata</h3>
                    <form action="{{ route('users.bioStore') }}" method="post">
                        @method('post')
                        @csrf
                        <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                        <button type="submit"
                            class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-4 py-2 md:px-5 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out">Create</button>
                    </form>
                </div>
            </div>
        @endif

    </div>

</x-auth-layout>
