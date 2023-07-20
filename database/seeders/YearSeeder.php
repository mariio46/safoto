<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Year::create([
            'yearName'  => '2015',
            'slug'      => '2015'
        ]);
        Year::create([
            'yearName'  => '2016',
            'slug'      => '2016'
        ]);
        Year::create([
            'yearName'  => '2017',
            'slug'      => '2017'
        ]);
        Year::create([
            'yearName'  => '2018',
            'slug'      => '2018'
        ]);
        Year::create([
            'yearName'  => '2019',
            'slug'      => '2019'
        ]);
        Year::create([
            'yearName'  => '2020',
            'slug'      => '2020'
        ]);
        Year::create([
            'yearName'  => '2021',
            'slug'      => '2021'
        ]);
        Year::create([
            'yearName'  => '2022',
            'slug'      => '2022'
        ]);
        Year::create([
            'yearName'  => '2023',
            'slug'      => '2023'
        ]);
    }
}
