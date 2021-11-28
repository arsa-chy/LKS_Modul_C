@extends('templates.master')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Produk</h3>
            </div>
            <form action="{{ route('produkStore') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="namaProduk">Nama Produk</label>
                        <input type="text" placeholder="Nama Produk" required name="namaProduk">
                    </div>
                    <div class="form-group">
                        <label for="beratProduk">Berat Produk</label>
                        <input type="number" placeholder="Berat Produk" required name="beratProduk">
                    </div>
                    <div class="form-group">
                        <label for="hargaProduk">Harga Produk</label>
                        <input type="number" placeholder="Harga Produk" required name="hargaProduk">
                    </div>
                    <div class="form-group">
                        <label for="idKategori">Kategori</label>
                        <select name="idKategori" id="kategori" required>
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
        </div>
    </div>
</div>
@endsection