<x-auth-layout title="Edit Your Picture">

    <div class="col-span-2">
        <div class="p-4 mb-0 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2">
            <h3 class="mb-1 text-lg sm:text-sm md:text-lg font-bold text-gray-900">Edit Your Photo's</h3>
            <x-error-messages />
            <form action="{{ route('pictures.update', $picture) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 lg:col-span-3">
                        <label for="file_input" class="block mb-2 text-sm font-medium text-gray-900 ">Current
                            Picture</label>
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col items-center justify-center w-full h-auto border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                <div class="flex flex-col items-center justify-center p-1 text-center">
                                    <div class=" flex justify-center">
                                        <img class="h-auto w-[740px] rounded-lg"
                                            src="{{ asset('../storage/' . $picture->image) }}" alt="">
                                    </div>
                                </div>
                                <input id="dropzone-file" type="hidden" class="hidden" name="oldImage"
                                    value="{{ $picture->image }}" />
                            </label>
                        </div>
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        {{-- File Input --}}
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">New
                            Image</label>
                        <input
                            class="mb-3 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            id="file_input" type="file" name="image">
                        {{-- /File Input --}}

                        {{-- Input 1 --}}
                        <label for="imgName" class="block mb-2 text-sm font-medium text-gray-900">Picture
                            Name</label>
                        <input type="text" name="imgName" id="imgName"
                            class="mb-3 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                            placeholder="Pameran Toraja" required value="{{ old('imgName', $picture->imgName) }}">
                        {{-- /Input 1 --}}

                        {{-- Input 2 --}}
                        <label for="event_id" class="block mb-2 text-sm font-medium text-gray-900">Event
                            Name</label>
                        <select id="event_id" name="event_id" id="event_id"
                            class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected disabled readonly>Choose Event</option>
                            @foreach ($events as $event)
                                @if (old('event_id', $picture->event_id) == $event->id)
                                    <option value="{{ $event->id }}" selected>{{ $event->eventName }}</option>
                                @else
                                    <option value="{{ $event->id }}">{{ $event->eventName }}</option>
                                @endif
                            @endforeach
                        </select>
                        {{-- /Input 2 --}}

                        {{-- Input 3 --}}
                        <label for="year_id" class="block mb-2 text-sm font-medium text-gray-900">Year</label>
                        <select id="year_id" name="year_id" id="year_id"
                            class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected disabled readonly>Choose Year</option>
                            @foreach ($years as $year)
                                @if (old('year_id', $picture->year_id) == $year->id)
                                    <option value="{{ $year->id }}" selected>{{ $year->yearName }}</option>
                                @else
                                    <option value="{{ $year->id }}">{{ $year->yearName }}</option>
                                @endif
                            @endforeach
                        </select>
                        {{-- /Input 3 --}}
                        {{-- Button Send --}}
                        <div class="w-full  flex justify-end gap-1 sm:gap-0">
                            <a href="{{ url()->previous() }}"
                                class="py-2 px-7 rounded-md font-bold bg-red-500 bg-opacity-80 text-white shadow-md sm:hover:scale-110 transition duration-300 ease-in-out sm:mr-2">Back</a>
                            {{-- <button class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-7 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out" type="submit">Update</button> --}}
                            <button
                                class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-7 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out"
                                type="submit">Update</button>
                        </div>
                        {{-- /Button Send --}}
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-auth-layout>
