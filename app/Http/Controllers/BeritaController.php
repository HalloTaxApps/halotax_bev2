<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();

        return response()->json($berita);
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
        $berita = Berita::create([
            'mitra' => $request->mitra,
            'judul' => $request->judul,
            'imageUrl' => $request->imageUrl,
            'deskripsi' => $request->deskripsi,
            'url' => $request->url
        ]);

        return response()->json($berita); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return response()->json($berita); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $berita->mitra = $request->mitra;
        $berita->judul = $request->judul;
        $berita->imageUrl = $request->imageUrl;
        $berita->deskripsi = $request->deskripsi;
        $berita->url = $request->url;
        $berita->save();

        return response()->json($berita); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return response()->json(
            'Berita dihapus!'
        ); 
    }
}
