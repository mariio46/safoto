<x-auth-layout title="Dashboard">
    {{-- Dashboard Page --}}
    <div class="grid grid-cols-1 xl:grid-cols-3 xl:gap-4">
        <div class="mb-4 col-span-full xl:mb-2">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl ">Dashboard</h1>
        </div>
        <!-- Right Content -->
        <div class="col-span-full xl:col-auto">
            @include('dashboard.layout.content.partials.profile-picture')

            @include('dashboard.layout.content.partials.profile-info')
        </div>
        <div class="col-span-2">
            @include('dashboard.layout.content.partials.gallery-dashboard')
        </div>
    </div>
    {{-- /Dashboard Page --}}
</x-auth-layout>
