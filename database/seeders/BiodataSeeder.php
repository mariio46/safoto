<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Biodata::create(
            [
                'user_id' => 1,
                'fullName' => 'Mario Arya Dimus',
                'birthDay' => null,
                'birthCity' => 'Parepare',
                'instagram' => 'mario46_',
                'facebook' => 'maario46_',
                'tiktok'   => null,
            ]
        );
        Biodata::create(
            [
                'user_id' => 2,
                'fullName' => 'Asizan',
                'birthDay' => null,
                'birthCity' => 'Parepare',
                'instagram' => null,
                'facebook' => null,
                'tiktok'   => null,
            ]
        );
        Biodata::create(
            [

                'user_id' => 3,
                'fullName' => 'Asdar Amiruddin',
                'birthDay' => null,
                'birthCity' => 'Parepare',
                'instagram' => 'asdarkao',
                'facebook' => null,
                'tiktok'   => null,
            ]
        );
        Biodata::create(
            [
                'user_id' => 4,
                'fullName' => 'Anjas Bakri',
                'birthDay' => null,
                'birthCity' => 'Parepare',
                'instagram' => 'anjasbakri_',
                'facebook' => null,
                'tiktok'   => null,
            ]
        );
    }
}
