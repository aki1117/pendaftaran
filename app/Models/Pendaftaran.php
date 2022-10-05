<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\InteractsWithMedia;

class Pendaftaran extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['nama', 'daerah_pemilihan', 'nik', 'tempat-lahir', 'tanggal-lahir', 'jenis-kelamin', 'agama', 'alamat-ktp', 'alamat-domisili', 'status-perkawinan', 'pendidikan-terakhir', 'pekerjaan', 'sd', 'smp', 'sma', 's1', 's2', 's3', 'riwayat-diklat', 'riwayat-organisasi', 'riwayat-pekerjaan', 'riwayat-penghargaan'];
}
