<?php

namespace App\Http\Controllers;

use App\Models\table_jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data jasa
        $jasa = table_jasa::all();
        return response()->json($jasa);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'freelance_id' => 'required|exists:table_freelance,id', // memastikan freelance_id ada di table_freelance
            'nama_jasa' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|string',
        ]);

        // Membuat data jasa baru
        $jasa = table_jasa::create($validatedData);
        return response()->json($jasa, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Menampilkan detail jasa berdasarkan ID
        $jasa = table_jasa::findOrFail($id);
        return response()->json($jasa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'freelance_id' => 'sometimes|required|exists:table_freelance,id',
            'nama_jasa' => 'sometimes|required|string|max:255',
            'harga' => 'sometimes|required|numeric',
            'gambar' => 'nullable|string',
        ]);

        // Mencari data jasa yang akan di-update
        $jasa = table_jasa::findOrFail($id);

        // Update data jasa
        $jasa->update($validatedData);

        return response()->json($jasa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Menghapus data jasa berdasarkan ID
        $jasa = table_jasa::findOrFail($id);
        $jasa->delete();

        return response()->json(['message' => 'Jasa deleted successfully']);
    }
}
