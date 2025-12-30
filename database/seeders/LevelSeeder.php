<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        $levels = [
            'admin',
            'kaprodi',
            'dosen_pembimbing',
            'mahasiswa'
        ];

        foreach ($levels as $level) {
            Level::create([
                'nama_level' => $level
            ]);
        }
    }
}
