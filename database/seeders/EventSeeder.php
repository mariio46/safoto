<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create(
            [
                'eventName' => 'Kota Toraja',
                'slug' => 'kota-toraja',
            ]
        );
        Event::create(
            [
                'eventName' => 'Kabupaten Barru',
                'slug' => 'kabupaten-barru',
            ]
        );
        Event::create(
            [
                'eventName' => 'Kabupaten Pinrang',
                'slug' => 'kabupaten-pinrang',
            ]
        );
        Event::create(
            [
                'eventName' => 'Kota Parepare',
                'slug' => 'kota-parepare',
            ]
        );
        Event::create(
            [
                'eventName' => 'Kabupaten Sidrap',
                'slug' => 'kabupaten-sidrap',
            ]
        );
    }
}
