<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi; // Pastikan model ini sesuai
use Illuminate\Routing\Controller as BaseController;

class ReservasiController extends BaseController
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_penyewa' => 'required|string|max:255',
            'email' => 'required|email',
            'tanggal_sewa' => 'required|date',
            // tambahkan validasi lainnya sesuai field
        ]);

        Reservasi::create($validated);

        return redirect()->back()->with('success', 'Reservasi berhasil dikirim!');
    }
}
