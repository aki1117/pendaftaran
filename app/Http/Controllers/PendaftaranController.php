<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'daerah-pemilihan' => 'required',
            'nik' => 'required',
            'no-telepon' => 'required',
            'tempat-lahir' => 'required',
            'tanggal-lahir' => 'required',
            'jenis-kelamin' => 'required',
            'agama' => 'required',
            'alamat-ktp' => 'required',
            'alamat-domisili' => 'required',
            'status-perkawinan' => 'required',
            'pendidikan-terakhir' => 'required',
            'pekerjaan' => 'required',
            'sd' => 'required',
            'smp' => 'required',
            'sma' => 'required',
            's1' => 'required',
            's2' => 'required',
            's3' => 'required',
            'riwayat-diklat' => 'required',
            'riwayat-organisasi' => 'required',
            'riwayat-pekerjaan' => 'required',
            'riwayat-penghargaan' => 'required',
        ]);
        $input = $request->all();
        $post = Pendaftaran::create($input);
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            $post->addMediaFromRequest('foto')->toMediaCollection('pendaftarans');
        }
        return redirect()->route('post');

        // Pendaftaran::create($request->post());

        // return redirect()->route('daftar')->with('success', 'Data telah disimpan. Temikaasih sudah mendaftar.');
    }
}
