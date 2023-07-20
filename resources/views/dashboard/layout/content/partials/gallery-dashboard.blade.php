<div class="p-4 mb-0 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
    <div class="w-full px-2 flex items-center justify-between">
        <h3 class="mb-1 text-sm md:text-lg font-bold text-gray-900 ">Best Photo's</h3>
        @can('auth')
            <a href="{{ route('pictures.index') }}"
                class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-3 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out"
                type="submit">More</a>
        @endcan
    </div>
    <div class="grid gap-4">
        @if ($posts->count())
            <div class=" flex justify-center">
                <img class="h-auto w-[740px] rounded-lg" oncontextmenu="return false"
                    src="{{ asset('../storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->imgName }}">
            </div>
        @else
            <div class=" flex justify-center">
                <img class="h-auto w-[740px] rounded-lg" oncontextmenu="return false"
                    src="{{ asset('../storage/image/default/art1.jpg') }}" alt="{{ Auth::user()->username }}">
            </div>
        @endif
        <div class="justify-center hidden min-[500px]:flex sm:hidden lg:flex grid-cols-5 gap-4">
            @foreach ($posts->skip(1) as $post)
                <div class="">
                    <img class="h-auto max-w-full rounded-lg" oncontextmenu="return false"
                        src="{{ asset('../storage/' . $post->image) }}" alt="{{ $post->imgName }}">
                </div>
            @endforeach
        </div>
    </div>
</div>
