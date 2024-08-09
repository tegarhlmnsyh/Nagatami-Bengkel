<?php

namespace App\Http\Controllers;

use App\Models\crud_serkom_tegar;
use Illuminate\Http\Request;

class CrudSerkomTegarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud_serkom_tegar = Crud_serkom_tegar::orderby('id')->get();
        return view('crud_serkom_tegar.index', compact('crud_serkom_tegar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud_serkom_tegar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'skema' => 'required',
            'hasil' => 'required',
            'tanggal_sertifikasi' => 'required',
        ]);
        Crud_serkom_tegar::create($validatedData);
        return redirect()->route('crud_serkom_tegar.index')->with('success', 'Data Berhasil Input');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $crud_serkom_tegar = crud_serkom_tegar::findOrFail($id);
    return view('crud_serkom_tegar.show', compact('crud_serkom_tegar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($crud_serkom_tegar);
        $crud_serkom_tegar = crud_serkom_tegar::findOrFail($id);
        return view('crud_serkom_tegar.edit', compact('crud_serkom_tegar'));
        ['crud_serkom_tegar' => $crud_serkom_tegar];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'skema' => 'required',
            'hasil' => 'required',
            'tanggal_sertifikasi' => 'required',
        ]);
        $crud_serkom_tegar = crud_serkom_tegar::findOrFail($id);
        $crud_serkom_tegar->update($validatedData);

        return redirect()->route('crud_serkom_tegar.index')->with('success', 'Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud_serkom_tegar = crud_serkom_tegar::findOrFail($id);
        $crud_serkom_tegar->delete();
        return redirect()->route('crud_serkom_tegar.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
