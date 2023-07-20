<div class="flex items-center justify-center ">
    <img class="mb-4 rounded-lg w-52 h-auto  sm:mb-0 xl:mb-4 2xl:mb-0"
        src="{{ asset('../storage/' . $userInfo->profile) }}" alt="{{ $userInfo->username }}">
</div>
<div class="mt-2 ">
    <form class=" space-y-2" action="{{ route('user.pictureUpdate', $userInfo) }}" method="post"
        enctype="multipart/form-data">
        @method('put')
        @csrf
        <input
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            id="file_input" type="hidden" name="oldProfile" value="{{ $userInfo->profile }}">
        <input
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            id="file_input" type="file" name="profile">
        <x-validation-error name="profile" />
        <div class="flex justify-end">
            @if (session()->has('pictureSuccess'))
                <div class="flex items-center mr-2">
                    {{-- <p class="italic ">Saved!</p> --}}
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400 italic">Saved!</p>
                </div>
            @endif
            <button
                class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-7 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out "
                type="submit">Update</button>
        </div>
    </form>
</div>
