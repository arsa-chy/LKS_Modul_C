<?php

namespace App\Http\Controllers;

use App\Models\NewProduk;
use App\Models\NewKategori;
use App\Models\Kirim;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Darryldecode\Cart\Cart;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $getProduk = NewProduk::all();
        $getKategori = NewKategori::all();
        $paket = Kirim::all();

        return view('home', compact('getProduk', 'getKategori', 'paket'));
    }

    public function hitungJumlah(Request $request)
    {
        $produk = NewProduk::find($request->idProduk);
        // dd($produk);
        \Cart::add([
            'id' => $produk->id,
            'name' => $produk->namaProduk,
            'price' => $produk->hargaProduk,
            'quantity' => $request->input('jumlahHarga'),
        ]);

        return redirect()->back()->with('messageCart', 'Produk Berhasil ditambahkan');
    }

    // public function show()
    // {
    //     $items = \Cart::getContent();

    //     return view('index', compact('items'));
    // }
}
