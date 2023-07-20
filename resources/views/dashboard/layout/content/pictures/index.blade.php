<x-auth-layout title="Your Picture's">

    <div class="col-span-2">
        <div class="p-4 mb-0 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2">
            <x-auth.header title="Your Photo's" link="{{ route('pictures.create') }}" body="Add"></x-auth.header>

            {{-- Allert --}}
            <x-auth.allert-messages :status="session('success')">
                <x-auth.allert-button />
            </x-auth.allert-messages>
            {{-- /Allert --}}

            <div class="relative overflow-x-auto shadow sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Picture Name's
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Event's City
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Year's
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pictures as $picture)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-32 p-4">
                                    <img src="{{ asset('../storage/' . $picture->image) }}" oncontextmenu="return false"
                                        alt="{{ $picture->alt_imgName }}">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    <a href="{{ route('user.gallery', Auth::user()) }}"
                                        class="hover:underline">{{ $picture->imgName }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    <a href="{{ route('event.gallery', $picture->event->slug) }}"
                                        class="hover:underline">
                                        {{ $picture->event->eventName }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 ">
                                    <a href="{{ route('year.gallery', $picture->year->slug) }}" class="hover:underline">
                                        {{ $picture->year->yearName }}
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('pictures.edit', $picture->slug) }}"
                                        class="mr-2 font-medium text-blue-600  hover:underline">Edit</a>
                                    <form action="{{ route('pictures.destroy', $picture) }}" method="post"
                                        class="inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="font-medium text-red-600  hover:underline"
                                            onclick="return confirm('Are You Sure Want to Delete This Picture?')">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $pictures->links() }}
        </div>
    </div>

</x-auth-layout>
