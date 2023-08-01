<?php

namespace App\Http\Controllers;

use App\Models\Pralogin;
use Illuminate\Http\Request;

class PraloginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pralogin = Pralogin::all();

        return response()->json($pralogin);
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
        $pralogin = Pralogin::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'imageUrl' => $request->imageUrl,
        ]);

        return response()->json($pralogin); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Pralogin $pralogin)
    {
        return response()->json($pralogin); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pralogin $pralogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pralogin $pralogin)
    {
        $pralogin->judul = $request->judul;
        $pralogin->deskripsi = $request->deskripsi;
        $pralogin->imageUrl = $request->imageUrl;
        $pralogin->save();

        return response()->json($pralogin); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pralogin $pralogin)
    {
        $pralogin->delete();

        return response()->json(
            'Pralogin dihapus!'
        );
    }
}
