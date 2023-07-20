    @foreach ($pictures as $picture)
        <div class="max-w-xs mb-5">
            <div class="lg:hover:scale-105 lg:transition lg:duration-300 lg:ease-in-out">
                <img class="rounded-md" id="img-protected" oncontextmenu="return false"
                    src="{{ asset('../storage/' . $picture->image) }}" alt="{{ $picture->imgName }}" />
            </div>
            <div class="pt-1 mb-5">
                <div class="flex justify-between">
                    <x-anchor-link href="{{ route('event.gallery', $picture->event->slug) }}">
                        {{ $picture->event->eventName }}
                    </x-anchor-link>
                    <x-anchor-link href="{{ route('year.gallery', $picture->year->slug) }}">
                        {{ $picture->year->yearName }}
                    </x-anchor-link>
                </div>
                <div>
                    <h5 class="text-base text-gray-800 font-bold cursor-default md:text-[18px]">{{ $picture->imgName }}
                    </h5>
                </div>
                <div>
                    <x-anchor-link href="{{ route('user.gallery', $picture->user->username) }}">
                        {{ $picture->user->username }}
                    </x-anchor-link>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <script>
        // Disable right-click
        document.addEventListener('contextmenu', (e) => e.preventDefault());

        function ctrlShiftKey(e, keyCode) {
            return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
        }

        document.onkeydown = (e) => {
            // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
            if (
                event.keyCode === 123 ||
                ctrlShiftKey(e, 'I') ||
                ctrlShiftKey(e, 'J') ||
                ctrlShiftKey(e, 'C') ||
                (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
            )
                return false;
        };
    </script> --}}
