@extends('templates.master')

@section('title', 'Edit Produk')

@section('content')
<div class="container">
    <form action="{{ route('produkUpdate', $produk->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" placeholder="Nama Produk" required name="namaProduk" value="{{ $produk->namaProduk }}">
        <input type="number" placeholder="Berat Produk" required name="beratProduk" value="{{ $produk->beratProduk }}">
        <input type="number" placeholder="Harga Produk" required name="hargaProduk" value="{{ $produk->hargaProduk }}">
        <select name="idKategori" id="kategori" required>
            @foreach ($kategori as $item)
                <option value="{{ $item->id }}">{{ $item->namaKategori }}</option>
            @endforeach
        </select>

        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>
@endsection