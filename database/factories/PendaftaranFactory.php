<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'daerah_pemilihan' => $this->faker->state,
            'nik' => $this->faker->nik,
            'tempat-lahir' => $this->faker->word,
            'tanggal-lahir' => $this->faker->dateTime,
            'jenis-kelamin' => $this->faker->randomElements(['laki-laki', 'perempuan']),
            'agama' => $this->faker->randomElements(['islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu']),
            'alamat-ktp' => $this->faker->townState,
            'alamat-domisili' => $this->faker->townState,
            'status-perkawinan' => $this->faker->randomElements(['kawin', 'cerai', 'belum kawin']),
            'pendidikan-terakhir' => $this->faker->randomElements(['sarjana', 'sma', 'smp']),
            'pekerjaan' => $this->faker->jobTitle,
            'sd' => $this->faker->word,
            'smp' => $this->faker->word,
            'sma' => $this->faker->word,
            's1' => $this->faker->word,
            's2' => $this->faker->word,
            's3' => $this->faker->word,
            'riwayat-diklat' => $this->faker->word,
            'riwayat-organisasi' => $this->faker->word,
            'riwayat-pekerjaan' => $this->faker->word,
            'riwayat-penghargaan' => $this->faker->word,
        ];
    }
}
