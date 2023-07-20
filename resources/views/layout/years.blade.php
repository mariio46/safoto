<x-app-layout title="From {{ $yearName }}">
    <div class="container">
        <div class="my-28 md:pt-5">
            <x-gallery.header>
                Photo from.
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    {{ Str::title($yearName) }}
                </span>
            </x-gallery.header>
            <div class="w-full flex flex-wrap justify-evenly md:mt-5">
                @if ($pictures->count())
                    <x-gallery.content-pictures :pictures="$pictures" />
                @else
                    <x-gallery.raw-picture />
                @endif
                {{-- {{ $pictures->links() }} --}}
            </div>
        </div>
    </div>
</x-app-layout>
