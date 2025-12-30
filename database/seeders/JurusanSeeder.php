<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            'nama_jurusan' => 'Teknik Informatika',
            'fakultas_id' => 1,
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Sistem Informasi',
            'fakultas_id' => 1,
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Manajemen',
            'fakultas_id' => 2,
        ]);
    }
}
