<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matakuliah;


class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_matakuliah' => 'Pemrograman Web', 'sks' => 3, 'id_jurusan' => 1],
            ['nama_matakuliah' => 'Algoritma', 'sks' => 3, 'id_jurusan' => 1],
            ['nama_matakuliah' => 'Matematika', 'sks' => 2, 'id_jurusan' => 2],
            ['nama_matakuliah' => 'Jaringan Komputer', 'sks' => 3, 'id_jurusan' => 3],
        ];
        foreach ($data as $mk) {
            Matakuliah::create($mk);
        }
    }
}
