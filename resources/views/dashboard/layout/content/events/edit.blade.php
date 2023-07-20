<x-auth-layout title="Edit Your Event">

    <div class="col-span-2">
        <div class="p-4 mb-0 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2">
            <h3 class="mb-1 text-lg sm:text-sm md:text-lg font-bold text-gray-900 ">Edit Event's</h3>
            <x-error-messages />
            <form action="{{ route('events.update', $event) }} " method="POST">
                @method('put')
                @csrf
                <div class="grid gap-6 mb-3 lg:grid-cols-2">
                    <div>
                        <label for="eventName" class="block mb-2 text-sm font-medium text-gray-900">Event's
                            City</label>
                        <input type="text" id="eventName" name="eventName"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:italic placeholder:text-[13px]"
                            value="{{ $event->eventName }}">
                    </div>
                </div>
                <div class="grid gap-6 mb-4 lg:grid-cols-2">
                    <div>
                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Event's
                            Slug</label>
                        <input type="text" id="slug" name="slug"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder:italic placeholder:text-[13px]"
                            value="{{ $event->slug }}">
                    </div>
                </div>
                <div class="mt-2 w-full  flex justify-between md:justify-start gap-1 sm:gap-0">
                    <a href="{{ url()->previous() }}"
                        class="py-2 px-7 rounded-md font-bold bg-red-500 bg-opacity-80 text-white shadow-md sm:hover:scale-110 transition duration-300 ease-in-out sm:mr-2">Back</a>
                    <button
                        class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-7 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out"
                        type="submit">Update</button>
                </div>
                {{-- /Button Send --}}
            </form>
        </div>
    </div>

</x-auth-layout>
