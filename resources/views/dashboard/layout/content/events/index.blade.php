<x-auth-layout title="Your Event's">

    <div class="col-span-2">
        <div class="p-4 mb-0 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2">
            <x-auth.header title="Event's" link="{{ route('events.create') }}" body="Add"></x-auth.header>

            {{-- Allert --}}
            <x-auth.allert-messages :status="session('success')">
                <x-auth.allert-button />
            </x-auth.allert-messages>

            <x-auth.allert-messages :status="session('error')" class="text-red-800 bg-red-50">
                <x-auth.allert-button class="bg-red-50 text-red-500 focus:ring-red-400 hover:bg-red-200" />
            </x-auth.allert-messages>
            {{-- /Allert --}}

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 ">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Event City
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Event Slug
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Pictures
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $event->eventName }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $event->slug }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $event->pictures_count }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('events.edit', $event) }}"
                                            class="mr-2 font-medium text-blue-600 hover:underline">Edit</a>
                                        <form action="{{ route('events.destroy', $event) }}" method="POST"
                                            class="inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="font-medium text-red-600 
                                                @if (!$event->pictures_count) hover:underline @endif 
                                                @if ($event->pictures_count) cursor-not-allowed @endif"
                                                @if ($event->pictures_count) @disabled(true) @endif
                                                onclick="return confirm('Are You Sure Want to Delete This event?')">Remove</button>
                                            {{-- <button type="submit" disabled
                                                class="font-medium text-red-600 cursor-not-allowed">Remove</button> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $events->links() }}
        </div>
    </div>

</x-auth-layout>
