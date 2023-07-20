<h3 class="mb-4 text-xl font-semibold ">User Info</h3>
<form action="{{ route('usersmanagement.infoUpdate', $userInfo) }}" method="post">
    @method('put')
    @csrf
    <input id="file_input" type="hidden" name="id" value="{{ $userInfo->id }}">
    <div class="mb-4">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
        <input type="text" id="username"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
            placeholder="Bonnie" value="{{ $userInfo->username }}" name="username" required>
        <x-validation-error name="username" />
    </div>
    <div class="mb-4">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input type="email" id="email"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
            placeholder="Bonnie" value="{{ $userInfo->email }}" name="email" required>
        <x-validation-error name="email" />
    </div>
    <div class="flex justify-end">
        @if (session()->has('infoSuccess'))
            <div class="flex items-center mr-2">
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400 italic">Saved!</p>
            </div>
        @endif
        <button
            class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-7 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out "
            type="submit">Update</button>
    </div>
</form>
