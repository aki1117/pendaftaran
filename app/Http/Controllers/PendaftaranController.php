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
            'nim' => 'required|max:11',
            'alamat' => 'required',
        ]);

        Pendaftaran::create($request->post());

        return redirect()->route('daftar')->with('success', 'Data telah disimpan. Temikaasih sudah mendaftar.');
    }
}
