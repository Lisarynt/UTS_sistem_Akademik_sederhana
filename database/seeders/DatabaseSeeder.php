<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            MahasiswaSeeder::class,
            MatakuliahSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Lisa Ayu',
            'email' => 'lisa01@gmail.com',
            'password' => 'lisa12345',
        ]);
    }
}
