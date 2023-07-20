<div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 sm:p-6 ">
    <div class="flex items-center justify-center ">
        <img class="mb-4 rounded-lg w-52 h-auto  sm:mb-0 xl:mb-4 2xl:mb-0" oncontextmenu="return false"
            src="{{ asset('../storage/' . Auth::user()->profile) }}" alt="{{ Auth::user()->username }}">
    </div>
</div>
