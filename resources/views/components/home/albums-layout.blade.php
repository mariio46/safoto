<section id="albums" class=" mt-16 min-[470px]:py-20">
    <div class="container text-center">
        <h4 class="text-2xl font-bold mb-2 text-gray-800 lg:text-4xl dark:text-gray-100">Albums</h4>
        <p class="mb-8 text-[14px] min-[470px]:text-base text-gray-600 dark:text-gray-400">Here are few albums from our
            fotographer, or click here if you want to see
            <a href="{{ route('gallery') }}" class="underline hover:font-bold">all pictures?</a>
            Enjoy It.
        </p>
    </div>
    <div class="container">
        <div class="w-full ">
            <div class="flex flex-wrap sm:justify-around md:justify-evenly ">
                {{-- {{ $slot }} --}}
                @foreach ($users as $user)
                    <div class="lg:w-[450px]">
                        <div
                            class="my-2 flex flex-col items-center bg-gray-400 bg-opacity-[0.10] rounded-lg shadow border border-gray-200 min-[470px]:flex-row md:max-w-xl sm:hover:scale-105 transition duration-300 ease-in-out dark:bg-gray-500 dark:bg-opacity-[0.12] dark:border-gray-800">
                            @if ($user->profile)
                                <img class="object-cover rounded-t-lg w-full h-[250px] min-[470px]:h-48 min-[470px]:w-48 min-[470px]:rounded-none min-[470px]:rounded-l-lg lg:h-52"
                                    src="{{ asset('../storage/' . $user->profile) }}" oncontextmenu="return false"
                                    alt="{{ $user->username }}">
                            @else
                                <img class="object-cover rounded-t-lg w-full h-[350px] md:h-48 md:w-48 md:rounded-none md:rounded-l-lg lg:h-52"
                                    src="{{ asset('../storage/image/default/default-profile.jpeg') }}"
                                    alt="Default Profile">
                            @endif
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5
                                    class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center min-[470px]:text-left dark:text-gray-200">
                                    <span>{{ $user->username }}</span>
                                </h5>
                                <p
                                    class="mb-3 text-[11px] text-center min-[470px]:text-left text-gray-600 dark:text-gray-500">
                                    Here some photos from our photographer, they're trying so hard to capture the
                                    perfect moment.
                                </p>
                                <div class="flex flex-wrap justify-center min-[470px]:justify-start">
                                    <a href="{{ route('user.profile', $user->username) }}"
                                        class="py-[3px] px-6 rounded-md font-bold bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 text-white shadow-md sm:hover:scale-110 transition duration-300 ease-in-out ">Profile</a>
                                    <a href="{{ route('user.gallery', $user->username) }}"
                                        class="py-[3px] px-6 rounded-md font-bold ml-5 bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 text-white shadow-md sm:hover:scale-110 transition duration-300 ease-in-out">Gallery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
