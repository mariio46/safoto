<x-app-layout title="Profile {{ Str::title($userBio->username) }}">
    <div class="mt-20">
        <div class="my-16 w-full flex flex-wrap md:py-16 md:px-32">
            <div class="container px-2 mx-auto max-w-md sm:max-w-xl md:max-w-full lg:flex lg:p-0  ">
                <div class="hidden lg:flex lg:w-96 lg:items-center lg:justissety-center ">
                    @if ($userBio->profile)
                        <img class="object-cover rounded-lg " oncontextmenu="return false"
                            src="{{ asset('../storage/' . $userBio->profile) }}" alt="{{ $userBio->username }}">
                    @else
                        <img class="object-cover rounded-lg"
                            src="{{ asset('../storage/img/default/default-profile.jpeg') }}" alt="Default Profile">
                    @endif
                </div>
                <div class=" lg:flex-1 lg:my-auto lg:px-10">
                    @if ($userBio->profile)
                        <img class="rounded-lg shadow-md mt-5 sm:w-full sm:object-cover sm:object-bottom sm:h-[700px] md:object-fill md:object-center lg:hidden"
                            src="{{ asset('../storage/' . $userBio->profile) }}" oncontextmenu="return false"
                            alt="{{ $userBio->username }}">
                    @else
                        <img class="rounded-lg shadow-md mt-5 sm:w-full sm:object-cover sm:object-bottom sm:h-[700px] md:object-fill md:object-center lg:hidden"
                            src="{{ asset('../storage/img/default/default-profile.jpeg') }}" alt="Default Profile">
                    @endif
                    <h3
                        class="text-2xl font-bold text-slate-700  md:text-4xl text-center sm:text-left border-b-2 border-black my-2">
                        {{ $userBio->biodata->fullName }}</h3>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <tbody>
                                <tr class="bg-white border-b  hover:bg-gray-50 ">
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        Tanggal Lahir
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $userBio->biodata->birthDay ?? 'Tanggal lahir belum di isi...' }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b  hover:bg-gray-50 ">
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        Kota Lahir
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $userBio->biodata->birthCity ?? 'Kota lahir belum di isi...' }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b  hover:bg-gray-50 ">
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        Instagram
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        <a
                                            @if ($userBio->biodata->instagram) href="https://www.instagram.com/{{ $userBio->biodata->instagram }}/"
                                    target="blank"
                                @else
                                    href="#"
                                    target="" @endif>
                                            <span class="flex items-center gap-2">
                                                <svg role="img" viewBox="0 0 24 24" class="fill-current"
                                                    xmlns="http://www.w3.org/2000/svg" width="25">
                                                    <title>Instagram</title>
                                                    <path
                                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                                </svg>
                                                {{ $userBio->biodata->instagram ?? 'No instagram...' }}
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b  hover:bg-gray-50 ">
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        Facebook
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        <a
                                            @if ($userBio->biodata->facebook) href="https://www.facebook.com/{{ $userBio->biodata->facebook }}/"
                                    target="blank"
                                @else
                                    href="#"
                                    target="" @endif>
                                            <span class="flex items-center gap-2">
                                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    width="25" viewBox="0 0 24 24">
                                                    <title>Facebook</title>
                                                    <path
                                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                                </svg>
                                                {{ $userBio->biodata->facebook ?? 'No facebook...' }}
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b  hover:bg-gray-50 ">
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        Tiktok
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        <a
                                            @if ($userBio->biodata->tiktok) href="https://www.tiktok.com/{{ $userBio->biodata->tiktok }}/"
                                    target="blank"
                                @else
                                    href="#"
                                    target="" @endif>
                                            <span class="flex items-center gap-2">
                                                <svg class="fill-current" role="img" viewBox="0 0 24 24"
                                                    width="25" xmlns="http://www.w3.org/2000/svg">
                                                    <title>TikTok</title>
                                                    <path
                                                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                                                </svg>
                                                {{ $userBio->biodata->tiktok ?? 'No tiktok...' }}
                                            </span>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4 sm:mt-6 md:mt-4 flex justify-between sm:justify-start">
                        <a href="/#albums"
                            class="py-2 px-7 rounded-md font-bold bg-red-500 bg-opacity-80 text-white shadow-md sm:hover:scale-110 transition duration-300 ease-in-out sm:mr-2">Back</a>
                        <a href="/gallery/{{ $userBio->username }}"
                            class="py-2 px-7 rounded-md font-bold bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 shadow-md sm:hover:scale-110 transition duration-300 ease-in-out text-white">Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
