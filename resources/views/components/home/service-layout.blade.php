<section id="service" class="mt-20">
    <div class="">
        <div
            class="w-full p-4 text-center bg-gray-400 bg-opacity-[0.10] py-[85px] dark:bg-gray-500 dark:bg-opacity-[0.12] ">
            <h4 class="text-xl font-bold text-gray-800 mb-3 md:text-2xl dark:text-gray-100">Our Service</h4>
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-gray-300">You can
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">buy</span>
                any photos
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">here.</span>
            </h5>
            <p class="mb-5 text-[14px] min-[470px]:text-base text-gray-600 dark:text-gray-400">Stay up to date and move
                work forward with
                Flowbite on iOS &
                Android. Download the app today.</p>
            <div class="mb-10">

                <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        @foreach ($pictures as $picture)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset($picture) }}"
                                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="Service Image">
                            </div>
                        @endforeach
                    </div>
                    <div class="flex justify-center items-center pt-4">
                        <button type="button"
                            class="flex justify-center items-center mr-4 h-full cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="flex justify-center items-center h-full cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>

            </div>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 ">
                <a href="/#service"
                    class="group max-[470px]:w-full min-[470px]:w-auto  bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 focus:outline-none text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 shadow-md sm:hover:scale-[1.15] transition duration-300 ease-in-out">
                    <svg class="mr-3 w-7 h-7 fill-current " xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 448 512">
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                    <div class="text-left text-white  ">
                        <div class="mb-1 text-xs">Get Photo On</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Whatsapp</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
