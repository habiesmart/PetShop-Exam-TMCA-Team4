<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pet = [
            [
                "name" => 'Bonny',
                "born" => '2022-11-08',
                "jenis_hewan" => 'Anjing',
                "aboutme" => 'Anjing yang Lucu',
            ],
            [
                "name" => 'Kitty',
                "born" => '2021-11-08',
                "jenis_hewan" => 'Kucing',
                "aboutme" => 'Kucing yang Lucu',
            ],
            [
                "name" => 'Ronny',
                "born" => '2022-04-08',
                "jenis_hewan" => 'Ikan',
                "aboutme" => 'Ikan yang Lucu',
            ],
        ];
        foreach ($pet as $key => $value) {
            Pet::create($value);
        }
    }
}
