<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ADMIN
        User::create([
            'nama_lengkap' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'gender' => 'L',
            'level_id' => 1, // Admin
            'fakultas_id' => null,
            'jurusan_id' => null,
            'jenjang' => null,
            'angkatan' => null,
            'semester' => null,
            'nim' => null,
            'nidn' => 87892863729,
            'dpp_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Kaprodi
        User::create([
            'nama_lengkap' => 'Kaprodi',
            'email' => 'kaprodi@example.com',
            'password' => Hash::make('kaprodi'),
            'gender' => 'L',
            'level_id' => 2, // Kaprodi
            'fakultas_id' => 1,
            'jurusan_id' => 2,
            'jenjang' => null,
            'angkatan' => null,
            'semester' => null,
            'nim' => null,
            'nidn' => 34562378909,
            'dpp_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // DPP
        User::create([
            'nama_lengkap' => 'Dosen Pembimbing',
            'email' => 'dobing@example.com',
            'password' => Hash::make('dobing'),
            'gender' => 'L',
            'level_id' => 3, // Dosen Pembimbing
            'fakultas_id' => 1,
            'jurusan_id' => 2,
            'jenjang' => null,
            'angkatan' => null,
            'semester' => null,
            'nim' => null,
            'nidn' => null,
            'dpp_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // MAHASISWA
        User::create([
            'nama_lengkap' => 'Mahasiswa',
            'email' => 'mahasiswa@example.com',
            'password' => Hash::make('mahasiswa'),
            'gender' => 'L',
            'level_id' => 4, // Mahasiswa
            'fakultas_id' => 1,
            'jurusan_id' => 2,
            'jenjang' => "S1",
            'angkatan' => 2021,
            'semester' => 8,
            'nim' => 20210120030,
            'nidn' => null,
            'dpp_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
