@for ($i = 1; $i <= 8; $i++)
    <div class="max-w-xs mb-5">
        <img class="rounded-md" src="{{ asset('../storage/image/default/600x400.png') }}" />
        <div class="pt-1 mb-5">
            <div class="flex justify-between">
                <span class="text-[13px] text-gray-500 font-medium cursor-default">
                    {{ 'Event ' . $i }}
                </span>
                <span class="text-[13px] text-gray-500 font-medium cursor-default">
                    {{ 'Year ' . $i }}
                </span>
            </div>
            <div>
                <h5 class="text-base text-gray-800 font-bold cursor-default md:text-[18px]">{{ 'Image Title ' . $i }}
                </h5>
            </div>
            <div>
                <span class="text-[13px] text-gray-500 font-medium cursor-default">
                    {{ 'Photographer ' . $i }}
                </span>
            </div>
        </div>
    </div>
    {{-- <div class="max-w-xs @elserounded-[2px]">
        <img class="rounded-[2px]" src="{{ url('https://via.placeholder.com/600x400') }}" alt="" />
        <div class=" flex flex-wrap justify-between mt-[2px] mb-4">
            <p class="text-[10px] bg-gray-500 text-slate-100 flex items-center py-1 px-2 rounded-[2px]">
                <span class="cursor-none">Event Name</span>
            </p>
            <p class="text-[10px] bg-gray-500 text-slate-100 flex items-center py-1 px-2 rounded-[2px]">
                <span>Year</span>
            </p>
        </div>
    </div> --}}
@endfor
