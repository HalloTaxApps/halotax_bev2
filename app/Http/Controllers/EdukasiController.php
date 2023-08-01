<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edukasi = Edukasi::all();

        return response()->json($edukasi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $edukasi = Edukasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'imageUrl' => $request->imageUrl,
            'materi' => $request->materi,
            'konten' => $request->konten,
            'tipe' => $request->tipe,
        ]);

        return response()->json($edukasi); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Edukasi $edukasi)
    {
        return response()->json($edukasi); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Edukasi $edukasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Edukasi $edukasi)
    {
        $edukasi->judul = $request->judul;
        $edukasi->deskripsi = $request->deskripsi;
        $edukasi->imageUrl = $request->imageUrl;
        $edukasi->materi = $request->materi;
        $edukasi->konten = $request->konten;
        $edukasi->tipe = $request->tipe;
        $edukasi->save();

        return response()->json($edukasi); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edukasi $edukasi)
    {
        $edukasi->delete();

        return response()->json(
            'Edukasi dihapus!'
        );
    }
}
