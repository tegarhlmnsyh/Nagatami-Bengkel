<?php

namespace App\Http\Controllers;

use App\Models\Langon;
use Illuminate\Http\Request;

class LangonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langon = Langon::orderby('id')->get();
        return view('langon.index', compact('langon'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Langon $langon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Langon $langon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Langon $langon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Langon $langon)
    {
        //
    }
}
