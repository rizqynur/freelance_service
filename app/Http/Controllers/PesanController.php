<?php

namespace App\Http\Controllers;

use App\Models\table_pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data pesan
        $pesan = table_pesan::all();
        return response()->json($pesan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'freelance_id' => 'required|exists:table_freelance,id', // Memastikan freelance_id ada di table_freelance
            'jasa_id' => 'required|exists:table_jasa,id',           // Memastikan jasa_id ada di table_jasa
            'tanggal' => 'required|date',
            'harga' => 'required|numeric',
        ]);

        // Membuat data pesan baru
        $pesan = table_pesan::create($validatedData);
        return response()->json($pesan, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Menampilkan detail pesan berdasarkan ID
        $pesan = table_pesan::findOrFail($id);
        return response()->json($pesan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'freelance_id' => 'sometimes|required|exists:table_freelance,id',
            'jasa_id' => 'sometimes|required|exists:table_jasa,id',
            'tanggal' => 'sometimes|required|date',
            'harga' => 'sometimes|required|numeric',
        ]);

        // Mencari data pesan yang akan di-update
        $pesan = table_pesan::findOrFail($id);

        // Update data pesan
        $pesan->update($validatedData);

        return response()->json($pesan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Menghapus data pesan berdasarkan ID
        $pesan = table_pesan::findOrFail($id);
        $pesan->delete();

        return response()->json(['message' => 'Pesan deleted successfully']);
    }
}
