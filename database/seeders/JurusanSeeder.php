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
        $data = [
            ['nama_jurusan' => 'Teknik Informatika', 'akreditasi' => 'A'],
            ['nama_jurusan' => 'Teknik Industri', 'akreditasi' => 'A'],
            ['nama_jurusan' => 'Teknik Elektro', 'akreditasi' => 'A'],
        ];
        foreach ($data as $jrs) {
            Jurusan::create($jrs);
        }
    }
}
