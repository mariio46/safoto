<x-auth-layout title="Update {{ Str::title($userInfo->username) }} Profile">

    <div class="grid grid-cols-1 xl:grid-cols-3 xl:gap-4">
        <div class="mb-4 md:flex justify-between items-center col-span-full xl:mb-2">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl mb-2">Update {{ Str::title($userInfo->username) }}
                Profile
            </h1>
            <div class="">
                <a href="{{ route('usersmanagement.show', $userInfo) }} "
                    class="py-2 px-7 rounded-md font-bold bg-red-500 bg-opacity-80 text-white shadow-md sm:hover:scale-110 transition duration-300 ease-in-out sm:mr-2">Back</a>
            </div>
        </div>
        <div class="col-span-full xl:col-auto">
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                @include('dashboard.layout.content.users-management.partials.profile-picture-update')
            </div>
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                @include('dashboard.layout.content.users-management.partials.profile-info-update')
            </div>
        </div>
        @if ($userBio)
            <div class="col-span-2">
                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
                    @include('dashboard.layout.content.users-management.partials.profile-bio-update')
                </div>
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:px-6 sm:pt-6 xl:pb-5 ">
                    @include('dashboard.layout.content.users-management.partials.password-confirmation')
                </div>
            </div>
        @endif
    </div>

</x-auth-layout>
