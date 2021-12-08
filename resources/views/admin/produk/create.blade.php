@extends('templates.master')

@section('title', 'Tambah Produk')

@section('content')
<div class="card card-login mx-auto mt-3">
    <div class="card-header">
        <h3 class="card-title">Tambah Produk</h3>
    </div>
    <form action="{{ route('produkStore') }}" method="POST">
    @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="namaProduk" class="form-label">Nama Produk</label>
                <input type="text" placeholder="Nama Produk" required name="namaProduk" class="form-control">
            </div>
            <div class="mb-3">
                <label for="beratProduk" class="form-label">Berat Produk</label>
                <input type="number" placeholder="Berat Produk" required name="beratProduk" class="form-control">
            </div>
            <div class="mb-3">
                <label for="hargaProduk" class="form-label">Harga Produk</label>
                <input type="number" placeholder="Harga Produk" required name="hargaProduk" class="form-control">
            </div>
            <div class="mb-3">
                <label for="idKategori" class="form-label">Kategori</label>
                <select name="idKategori" id="kategori" required class="form-control">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->namaKategori }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Tambah</button>
        </div>
    </form>    
</div> 
@endsection