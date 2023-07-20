<x-auth-layout title="Update Your Profile">

    <div class="grid grid-cols-1 xl:grid-cols-3 xl:gap-4">
        <div class="mb-4 flex justify-between col-span-full xl:mb-2">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">Update Your Profile</h1>
            <a href="{{ route('users.index') }}"
                class="py-2 px-7 rounded-md font-bold bg-red-500 bg-opacity-80 text-white shadow-md sm:hover:scale-110 transition duration-300 ease-in-out sm:mr-2">Back</a>
        </div>
        <div class="col-span-full xl:col-auto">
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                @include('dashboard.layout.content.users.partials.profile-picture-update')
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                @include('dashboard.layout.content.users.partials.profile-info-update')
            </div>
        </div>
        @if ($userBio)
            <div class="col-span-2">
                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                    @include('dashboard.layout.content.users.partials.profile-bio-update')
                </div>
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:px-6 sm:pt-6 xl:pb-5 ">
                    @include('dashboard.layout.content.users.partials.password-confirmation')
                </div>
            </div>
        @endif
    </div>

</x-auth-layout>
