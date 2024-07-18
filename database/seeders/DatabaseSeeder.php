<?php
/** 
namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    /** 
     public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
**/

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Nilai;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Membuat data mahasiswa
        $mahasiswa = Mahasiswa::create(['nama' => 'John Doe', 'nim' => '123456789']);

        // Membuat data matakuliah
        $matakuliah = Matakuliah::create(['nama' => 'Matematika']);

        // Membuat data nilai
        Nilai::create([
            'mahasiswa_id' => $mahasiswa->id,
            'matakuliah_id' => $matakuliah->id,
            'nilai' => 90
        ]);
    }
}

