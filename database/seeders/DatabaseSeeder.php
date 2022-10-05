<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Pendaftaran::factory(10)->create();

        \App\Models\Pendaftaran::factory()->create([
            'nama' => 'Rizky',
            'daerah_pemilihan' => 'Bogor',
            'nik' => '123456789',
            'tempat-lahir' => 'Bogor',
            'tanggal-lahir' => '2000-01-01',
            'jenis-kelamin' => 'laki-laki',
            'agama' => 'islam',
            'alamat-ktp' => 'Bogor',
            'alamat-domisili' => 'Bogor',
            'status-perkawinan' => 'kawin',
            'pendidikan-terakhir' => 'sarjana',
            'pekerjaan' => 'mahasiswa',
            'sd' => 'sd 1 bogor',
            'smp' => 'smp 2 bogor',
            'sma' => 'sma 1 bogor',
            's1' => 'UMY',
            's2' => 'UGM',
            's3' => 'UI',
            'riwayat-diklat' => 'diklat',
            'riwayat-organisasi' => 'organisasi',
            'riwayat-pekerjaan' => 'pekerjaan',
            'riwayat-penghargaan' => 'penghargaan',
        ]);
    }
}
