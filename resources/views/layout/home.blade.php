<x-app-layout>
    <x-home.hero-layout />

    <x-home.albums-layout :users="$users" />

    <x-home.service-layout :pictures="$pictures" />

    <x-home.contact-layout />

</x-app-layout>
