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
        $kategori = new NewKategori();
        $kategori->namaKategori = $request->namaKategori;

        NewKategori::create($kategori);
        return redirect('admin.index');
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
        $kategori = NewKategori::find($id);
        return view('admin.kategori.edit', compact('kategori'));
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
        $kategori = new NewKategori();
        $kategori->namaKategori = $request->namaKategori;

        NewKategori::where('id', $id)->update($kategori);
        return redirect('admin.index');
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
