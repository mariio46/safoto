@can('auth')
    <li>
        <a href="{{ route('pictures.index') }}"
            class="{{ Request::is('auth/dashboard/pictures*') ? 'bg-gray-100' : '' }} flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100">
            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                </path>
            </svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Gallery</span>
        </a>
    </li>
@endcan
