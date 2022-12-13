<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Pengguna::create([
            "nama" => "fulan",
            "email" => "fulan@xample.com",
            "password" => "fulan123",
        ]);
    }
}
