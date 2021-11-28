<?php

namespace App\Http\Controllers;

use App\Models\NewProduk;
use App\Models\NewKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class NewProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getProduk = NewProduk::all();
        $getKategori = NewKategori::all();

        return view('admin.index', compact('getProduk', 'getKategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create', [
            'kategori' => NewKategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new NewProduk();
        $produk->namaProduk = $request->namaProduk;
        $produk->beratProduk = $request->beratProduk;
        $produk->hargaProduk = $request->hargaProduk;
        $produk->idKategori = $request->idKategori;

        $produk['tanggalProduksi'] = Carbon::now();

        NewProduk::create($produk);
        return redirect('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewProduk  $newProduk
     * @return \Illuminate\Http\Response
     */
    public function show(NewProduk $newProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewProduk  $newProduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = NewProduk::find($id);
        $kategori = NewKategori::all();
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewProduk  $newProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = new NewProduk();
        $produk->namaProduk = $request->namaProduk;
        $produk->beratProduk = $request->beratProduk;
        $produk->hargaProduk = $request->hargaProduk;
        $produk->idKategori = $request->idKategori;

        NewProduk::where('id', $id)->update($produk);
        return redirect('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewProduk  $newProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewProduk::destroy($id);

        return redirect()->back();
    }
}
