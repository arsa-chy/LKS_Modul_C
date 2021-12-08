<?php

namespace App\Http\Controllers;

use App\Models\NewKategori;
use Illuminate\Http\Request;

class NewKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getKategori = NewKategori::all();

        return view('admin.index', compact('getKategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = $request->validate([
            'namaKategori' => 'required'
        ]);

        NewKategori::create($kategori);
        return redirect()->route('produkShow');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewKategori  $newKategori
     * @return \Illuminate\Http\Response
     */
    public function show(NewKategori $newKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewKategori  $newKategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewKategori  $newKategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kategori = $request->validate([
            'namaKategori' => 'required'
        ]);

        NewKategori::where('id', $id)->update($kategori);
        return redirect()->route('produkShow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewKategori  $newKategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewKategori::destroy($id);
        return redirect()->back();
    }
}
