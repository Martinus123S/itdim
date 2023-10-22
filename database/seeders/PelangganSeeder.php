<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        function run(): void
        {
            DB::table('pelanggan')->insert([
                'namaPelanggan' => Str::random(10),
                'Alamat' => Str::random(10).'@gmail.com',
                'No Telepon' => '081231231'
            ]);
        }
    }
}
