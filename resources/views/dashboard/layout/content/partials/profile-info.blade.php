<div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
    {{-- @foreach ($users as $user) --}}
    <div class="w-full flex items-center justify-between mb-4">
        <h3 class="mb-1 text-sm md:text-lg font-bold text-gray-900">User Info</h3>
        <a href="{{ route('users.index') }}"
            class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-2 py-2 md:px-4 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out"
            type="submit">Update</a>
    </div>
    <div class="mb-4">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
        <input type="text" name="username" id="username"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
            placeholder="Bonnie" readonly disabled required value="{{ Auth::user()->username }}">
    </div>
    <div class="mb-4">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
        <input type="email" name="email" id="email"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
            placeholder="Bonnie" readonly disabled required value="{{ Auth::user()->email }}">
    </div>
    {{-- @endforeach --}}
</div>
