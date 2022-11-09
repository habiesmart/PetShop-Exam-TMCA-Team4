<?php

namespace Database\Seeders;

use App\Models\PaketPerawatan;
use Illuminate\Database\Seeder;

class PaketPerawatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pakets = [
            [
                "nama_paket" => 'Dry Grooming',
                "deskripsi_paket" => 'Lorem Ipsum dolor sit amet',
                "harga_paket" => 100000.0,
            ],
            [
                "nama_paket" => 'Basic Grooming',
                "deskripsi_paket" => 'Lorem Ipsum dolor sit amet',
                "harga_paket" => 200000.0,
            ],
            [
                "nama_paket" => 'Premium Grooming',
                "deskripsi_paket" => 'Lorem Ipsum dolor sit amet',
                "harga_paket" => 300000.0,
            ],
        ];
        foreach ($pakets as $key => $value) {
            PaketPerawatan::create($value);
        }
    }
}
