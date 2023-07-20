<?php

namespace Database\Seeders;

use App\Models\Biodata;
use App\Models\Picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            YearSeeder::class,
            EventSeeder::class,
            BiodataSeeder::class,
        ]);
    }
}
