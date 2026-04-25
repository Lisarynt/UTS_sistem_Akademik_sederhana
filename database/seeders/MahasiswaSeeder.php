<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nim' => '23552011', 'nama' => 'Arrapi', 'id_jurusan' => 1],
            ['nim' => '24662012', 'nama' => 'Lisa Ayu', 'id_jurusan' => 1],
            ['nim' => '24772013', 'nama' => 'Naura khanza', 'id_jurusan' => 2],
            ['nim' => '25882014', 'nama' => 'Sulis Setiawati', 'id_jurusan' => 3],
        ];
        foreach ($data as $mhs) {
            Mahasiswa::create($mhs);
        }
    }
}
