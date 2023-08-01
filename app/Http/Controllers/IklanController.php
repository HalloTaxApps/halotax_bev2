<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iklan = Iklan::all();

        return response()->json($iklan);
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
        $iklan = Iklan::create([
            'mitra' => $request->mitra,
            'judul' => $request->judul,
            'imageUrl1' => $request->imageUrl1,
            'imageUrl2' => $request->imageUrl2,
            'imageUrl3' => $request->imageUrl3,
            'imageUrl4' => $request->imageUrl4,
            'imageUrl5' => $request->imageUrl5,
            'deskripsi' => $request->deskripsi,
            'info' => $request->info,
            'syarat' => $request->syarat,
            'url' => $request->url,
        ]);

        return response()->json($iklan); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Iklan $iklan)
    {
        return response()->json($iklan); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Iklan $iklan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Iklan $iklan)
    {
        $iklan->mitra = $request->mitra;
        $iklan->judul = $request->judul;
        $iklan->imageUrl1 = $request->imageUrl1; 
        $iklan->imageUrl2 = $request->imageUrl2;
        $iklan->imageUrl3 = $request->imageUrl3;
        $iklan->imageUrl4 = $request->imageUrl4;
        $iklan->imageUrl5 = $request->imageUrl5;
        $iklan->deskripsi = $request->deskripsi;
        $iklan->info = $request->info;
        $iklan->syarat = $request->syarat;
        $iklan->url = $request->url;
        $iklan->save();

        return response()->json($iklan); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iklan $iklan)
    {
        $iklan->delete();

        return response()->json(
            'Iklan dihapus!'
        );
    }
}
