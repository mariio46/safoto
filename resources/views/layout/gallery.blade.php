<x-app-layout title="Gallery {{ Str::title($user) }}">
    <div class="container">
        <div class="my-28 md:pt-5">
            <x-gallery.header>
                Photo by.
                <a href="/profile/{{ $user }}">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                        {{ Str::title($user) }}
                    </span>
                </a>
            </x-gallery.header>
            <div class="w-full flex flex-wrap justify-evenly md:mt-5">
                @if ($pictures->count())
                    <x-gallery.content-pictures :pictures="$pictures" />
                @else
                    <x-gallery.raw-picture />
                @endif
            </div>
            <div class="flex justify-center mt-7">
                {{-- {{ $pictures->links() }} --}}
            </div>
        </div>
    </div>
</x-app-layout>
