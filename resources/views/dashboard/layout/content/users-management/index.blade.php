<x-auth-layout title="User List">

    <div class="col-span-2">
        <div class="p-4 mb-0 space-y-6 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2">
            <x-auth.header title="User List's" link="{{ route('usersmanagement.create') }}" body="Add"></x-auth.header>

            <x-auth.allert-messages :status="session('success')">
                <x-auth.allert-button />
            </x-auth.allert-messages>

            <x-auth.allert-messages :status="session('error')" class="text-red-800 bg-red-50">
                <x-auth.allert-button class="bg-red-50 text-red-500 focus:ring-red-400 hover:bg-red-200" />
            </x-auth.allert-messages>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 ">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Pictures
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td
                                        class="px-6 py-4 font-semibold @if ("$user->isAdmin") text-yellow-400
                                        @else
                                            text-gray-800 @endif">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-semibold @if ("$user->isAdmin") text-yellow-400
                                        @else
                                            text-gray-800 @endif">
                                        {{ $user->username }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-semibold @if ("$user->isAdmin") text-yellow-400
                                        @else
                                            text-gray-800 @endif">
                                        {{ $user->email }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-semibold @if ("$user->isAdmin") text-yellow-400
                                        @else
                                            text-gray-800 @endif">
                                        @if ($user->isAdmin)
                                            💛
                                        @else
                                            {{ $user->pictures_count }}
                                        @endif
                                    </td>
                                    <td
                                        class="px-6 py-4 font-semibold @if ("$user->isAdmin") text-yellow-400
                                        @else
                                            text-gray-800 @endif">
                                        @if ($user->isAdmin)
                                            Admin
                                        @else
                                            Fotografer
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('usersmanagement.show', $user->username) }}"
                                            class="mr-2 font-medium text-emerald-600 hover:underline">Show</a>

                                        <a href="{{ route('usersmanagement.edit', $user) }}"
                                            class="mr-2 font-medium text-blue-600 hover:underline">Edit</a>

                                        <form action="{{ route('usersmanagement.destroy', $user->username) }}"
                                            method="post" class="inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"class="font-medium text-red-600 hover:underline"
                                                onclick="return confirm('Are You Sure Want to Delete This User?')">
                                                Remove
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- {{ $events->links() }} --}}
        </div>
    </div>

</x-auth-layout>
