<h3 class="mb-4 text-xl font-semibold ">General information</h3>
<form action="{{ route('usersmanagement.bioUpdate', $userInfo) }}" method="post">
    @method('put')
    @csrf
    <input id="file_input" type="hidden" name="id" value="{{ $userInfo->id }}">
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="fullName" class="block mb-2 text-sm font-medium text-gray-900 ">Full Name</label>
            <input type="text" name="fullName" id="fullName"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                @if ($userBio->fullName) value="{{ $userBio->fullName }}" @else placeholder="Fullname not found...!" @endif>
            <x-validation-error name="fullName" />
        </div>
        <div class="col-span-6
                sm:col-span-3">
            <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900">Birthday</label>
            <input type="date" name="birthDay" id="birthday"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                @if ($userBio->birthDay) value="{{ $userBio->birthDay }}" @else placeholder="Birtday not found...!" @endif>
            <x-validation-error name="birthDay" />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900">City</label>
            <input type="text" name="birthCity" id="city"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                @if ($userBio->birthCity) value="{{ $userBio->birthCity }}" @else placeholder="No City Found" @endif>
            <x-validation-error name="birthCity" />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="instagram" class="block mb-2 text-sm font-medium text-gray-900">Instagram</label>
            <input type="text" name="instagram" id="instagram"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                @if ($userBio->instagram) value="{{ $userBio->instagram }}" @else placeholder="Instagram not found...!" @endif>
            <x-validation-error name="instagram" />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="facebook" class="block mb-2 text-sm font-medium text-gray-900">Facebook</label>
            <input type="text" name="facebook" id="facebook"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                @if ($userBio->facebook) value="{{ $userBio->facebook }}" @else placeholder="Facebook not found...!" @endif>
            <x-validation-error name="facebook" />
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="tiktok" class="block mb-2 text-sm font-medium text-gray-900">Tiktok</label>
            <input type="text" name="tiktok" id="tiktok"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic"
                @if ($userBio->tiktok) value="{{ $userBio->tiktok }}" @else placeholder="Tiktok not found...!" @endif>
            <x-validation-error name="tiktok" />
        </div>
    </div>
    <div class="flex justify-end items-center">
        @if (session()->has('bioSuccess'))
            <div class="flex items-center mr-3 mt-7">
                {{-- <p class="italic ">Saved!</p> --}}
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
