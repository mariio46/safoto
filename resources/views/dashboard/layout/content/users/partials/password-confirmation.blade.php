<h3 class="mb-4 text-xl font-semibold ">Password Information</h3>
<x-auth.allert-messages :status="session('success')">
    <x-auth.allert-button />
</x-auth.allert-messages>

<x-auth.allert-messages :status="session('error')" class="text-red-800 bg-red-50">
    <x-auth.allert-button class="bg-red-50 text-red-500 focus:ring-red-400 hover:bg-red-200" />
</x-auth.allert-messages>
<form action="{{ route('user.passwordUpdate', ['user', $userInfo]) }}" method="post">
    @method('put')
    @csrf
    <div class="grid grid-cols-6 gap-3">
        <div class="col-span-6 sm:col-span-6">
            <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900">
                Current password</label>
            <input type="password" name="current_password" id="current-password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
            <x-validation-error name="current_password" />
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                New password</label>
            <input type="password" name="password" id="password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
            <x-validation-error name="password" />
        </div>
        <div class="col-span-6 sm:col-span-6">
            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">
                Password Confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
            <x-validation-error name="password_confirmation" />
        </div>
    </div>
    <div class="flex justify-end items-center">
        {{-- <span
class="text-sm md:text-base lg:text-lg font-semibold text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 mt-7">Upcoming
Feature!
</span> --}}
        @if (session()->has('passwordSuccess'))
            <div class="flex items-center mr-3 mt-7">
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400 italic">Saved!</p>
            </div>
        @endif
        <button
            class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-7 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out mt-7"
            type="submit">
            Update
        </button>
    </div>
</form>
