<?php

namespace App\Http\Controllers;

use App\Models\TermsPolicy;
use Illuminate\Http\Request;

class TermsPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $termsPolicy = TermsPolicy::all();

        return response()->json($termsPolicy);
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
        $termsPolicy = TermsPolicy::create([
            'terms' => $request->terms,
            'policy' => $request->policy
        ]);

        return response()->json($termsPolicy);
    }

    /**
     * Display the specified resource.
     */
    public function show(TermsPolicy $termsPolicy)
    {
        return response()->json($termsPolicy);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TermsPolicy $termsPolicy)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TermsPolicy $termsPolicy)
    {
        $termsPolicy->terms = $request->terms;
        $termsPolicy->policy = $request->policy;
        $termsPolicy->save();

        return response()->json($termsPolicy);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TermsPolicy $termsPolicy)
    {
        $termsPolicy->delete();

        return response()->json('Terms Policy dihapus!');
    }
}
