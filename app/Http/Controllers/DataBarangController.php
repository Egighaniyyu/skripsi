<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_barang = DataBarang::all();
        return view('data-barang.index', compact('data_barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data-barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DataBarang::create([
            'nama_barang' => $request->nama,
            'kategori' => $request->kategori
        ]);

        return redirect()->route('data-barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataBarang $dataBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataBarang $dataBarang)
    {
        $dataBarang = DataBarang::find($dataBarang->id);
        return view('data-barang.edit', compact('dataBarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataBarang $dataBarang)
    {
        $dataBarang->update([
            'nama_barang' => $request->nama,
            'kategori' => $request->kategori
        ]);

        return redirect()->route('data-barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataBarang $dataBarang)
    {
        $dataBarang = DataBarang::find($dataBarang->id);
        $dataBarang->delete();
        return redirect()->route('data-barang.index');
    }
}
