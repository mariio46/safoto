<x-auth-layout title="Year's">

    <div class="col-span-2">
        <div class="p-4 mb-0 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2">
            <x-auth.header title="Years" link="{{ route('years.create') }}" body="Add" />

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
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Year
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Year Slug
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
                            @foreach ($years as $year)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $year->yearName }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $year->slug }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $year->pictures_count }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('years.edit', $year) }}"
                                            class="mr-2 font-medium text-blue-600 hover:underline">Edit</a>
                                        <form action="{{ route('years.destroy', $year) }}" method="post"
                                            class="inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="font-medium text-red-600 
                                                @if (!$year->pictures_count) hover:underline @endif 
                                                @if ($year->pictures_count) cursor-not-allowed @endif"
                                                @if ($year->pictures_count) @disabled(true) @endif
                                                onclick="return confirm('Are You Sure Want to Delete This Year?')">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="w-full px-2 flex items-center justify-between"> --}}
            {{ $years->links() }}
            {{-- </div> --}}
        </div>
    </div>

</x-auth-layout>
