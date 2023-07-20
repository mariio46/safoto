<x-auth-layout title="Upload Your Picture">

    <div class="col-span-2">
        <div class="p-4 mb-0 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2">
            <h3 class="mb-1 text-lg sm:text-sm md:text-lg font-bold text-gray-900 ">Insert your photo</h3>

            <x-error-messages />

            <form action="{{ route('pictures.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 lg:col-span-3">
                        {{-- Input 1 --}}
                        <label for="imgName"
                            class="block mb-2 text-sm font-medium text-gray-900  @error('imgName')text-red-500 @enderror">Image
                            Name</label>
                        <input type="text" name="imgName" id="imgName"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-xs rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic focus:placeholder:text-slate-400 placeholder:text-xs @error('imgName')border-red-500 placeholder:text-red-500 @enderror required:border-yellow-500"
                            placeholder="Enter Name of Image" value="{{ old('imgName') }}" autofocus>
                        <x-validation-error name="imgName" />
                        {{-- /Input 1 --}}

                        {{-- Input 2 --}}
                        <label for="alt_imgName"
                            class="mt-3 block mb-2 text-sm font-medium text-gray-900  @error('alt_imgName')text-red-500 @enderror">Alternatif
                            Image Name</label>
                        <input type="text" name="alt_imgName" id="alt_imgName"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-xs rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 placeholder:italic focus:placeholder:text-slate-400 @error('alt_imgName')border-red-500 placeholder:text-red-500 @enderror required:border-yellow-500 placeholder:text-xs"
                            placeholder="Enter Alternatif Name of Image" value="{{ old('alt_imgName') }}">
                        <x-validation-error name="alt_imgName" />
                        {{-- /Input 2 --}}

                        {{-- Input 5 --}}
                        <label for="event_id"
                            class="mt-3 block mb-2 text-sm font-medium text-gray-900  @error('event_id')text-red-500 @enderror">Event's
                            City</label>
                        <select id="event_id" name="event_id" id="event_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('event_id')border-red-500 optional:text-red-500 @enderror selectio optional:text-xs">
                            <option selected disabled readonly class="">Choose Event's City</option>
                            @foreach ($events as $event)
                                @if (old('event_id') == $event->id)
                                    <option value="{{ $event->id }}" selected>{{ $event->eventName }}</option>
                                @else
                                    <option value="{{ $event->id }}">{{ $event->eventName }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-validation-error name="event_id" />

                        {{-- /Input 5 --}}

                        {{-- Input 5 --}}
                        <label for="year_id"
                            class="mt-3 block mb-2 text-sm font-medium text-gray-900  @error('year_id')text-red-500 @enderror">Year</label>
                        <select id="year_id" name="year_id" id="year_id"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('year_id')border-red-500 optional:text-red-500 @enderror optional:text-xs">
                            <option selected disabled readonly>Choose Year</option>
                            @foreach ($years as $year)
                                @if (old('year_id') == $year->id)
                                    <option value="{{ $year->id }}" selected>{{ $year->yearName }}</option>
                                @else
                                    <option value="{{ $year->id }}">{{ $year->yearName }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-validation-error name="year_id" />
                        {{-- /Input 5 --}}
                    </div>

                    {{-- File Input --}}
                    <div class="col-span-6 lg:col-span-3">
                        <label
                            class="block mb-2 text-sm font-medium text-gray-900  @error('image')text-red-500 @enderror"
                            for="image">Image</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-teal-500 file:text-violet-700
                            hover:file:bg-violet-100"
                            aria-describedby="image_help" id="image" type="file" name="image"
                            onchange="previewImage()" value="{{ old('image') }}">
                        <x-validation-error name="image" />
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-300 @error('image')text-red-500 @enderror"
                            id="image_help">SVG, PNG, JPG or GIF
                            (MAX. 800x400px).</p>
                        {{-- Image Preview --}}
                        <div class="mt-3 col-span-6 lg:col-span-3">
                            <div class="flex items-center justify-center w-full">
                                <div class="flex flex-col items-center justify-center p-1 text-center">
                                    <div class=" flex justify-center">
                                        <img class="h-auto w-[745px] rounded-lg img-preview">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /Image Preview --}}

                        {{-- Button Send --}}
                        <div class="mt-2 w-full  flex justify-end gap-1 sm:gap-0">
                            <a href="{{ url()->previous() }}"
                                class="py-2 px-7 rounded-md font-bold bg-red-500 bg-opacity-80 text-white shadow-md sm:hover:scale-110 transition duration-300 ease-in-out sm:mr-2">Back</a>
                            <button
                                class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-7 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out"
                                type="submit">Create</button>
                        </div>
                        {{-- /Button Send --}}
                    </div>
                    {{-- /File Input --}}
                </div>
            </form>

        </div>
    </div>

    <script>
        // Auto Fill Slug
        const img_Name = document.querySelector("#imgName");
        const altImg_Name = document.querySelector("#alt_imgName");

        // Result for Alt Name
        img_Name.addEventListener("change", function() {
            let prealtImage_Name = img_Name.value;
            // prealtImage_Name = prealtImage_Name.replace(/ /g, "-");
            altImg_Name.value = prealtImage_Name.toLocaleLowerCase();
        });

        // Preview Image
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

</x-auth-layout>
