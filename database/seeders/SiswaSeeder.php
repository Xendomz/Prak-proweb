<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::insert([
            [
                'nama_siswa' => 'Si A',
                'NIK' => 23124321,
                'alamat' => 'Jl. Pahlawan',
                'id_kelas' => 1
            ],
            [
                'nama_siswa' => 'Si B',
                'NIK' => 23124321,
                'alamat' => 'Jl. Test',
                'id_kelas' => 2
            ],
        ]);
    }
}
