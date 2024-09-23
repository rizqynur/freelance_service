<?php

namespace App\Http\Controllers;

use App\Models\Freelance;
use Illuminate\Http\Request;

class FreelanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data freelance
        $freelances = Freelance::all();
        return response()->json($freelances);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'email' => 'required|email|unique:table_freelance,email',
            'alamat' => 'required|string',
            'gambar' => 'nullable|string',
            'bidang' => 'required|string',
        ]);

        // Membuat data freelance baru
        $freelance = Freelance::create($validatedData);
        return response()->json($freelance, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Menampilkan detail freelance berdasarkan ID
        $freelance = Freelance::findOrFail($id);
        return response()->json($freelance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_perusahaan' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:table_freelance,email,' . $id,
            'alamat' => 'sometimes|required|string',
            'gambar' => 'nullable|string',
            'bidang' => 'sometimes|required|string',
        ]);

        // Mencari data freelance yang akan di-update
        $freelance = Freelance::findOrFail($id);

        // Update data freelance
        $freelance->update($validatedData);

        return response()->json($freelance);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Menghapus data freelance berdasarkan ID
        $freelance = Freelance::findOrFail($id);
        $freelance->delete();

        return response()->json(['message' => 'Freelance deleted successfully']);
    }
}
