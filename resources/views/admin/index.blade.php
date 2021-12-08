@extends('templates.master')

@section('title', 'Produk')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Produk</h1>
                <a href="{{ route('produkCreate') }}" class="btn btn-primary" role="button">
                    @csrf
                    Tambah Produk
                </a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Berat</th>
                            <th>Tanggal Produksi</th>
                            <th>Harga Produk</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getProduk as $produk)
                        <tr>
                            <td>{{ $produk->id }}</td>
                            <td>{{ $produk->namaProduk }}</td>
                            <td>{{ $produk->beratProduk }}</td>
                            <td>{{ $produk->tanggalProduksi }}</td>
                            <td>Rp. {{ number_format($produk->hargaProduk) }}</td>
                            <td>{{ $produk->idKategori }}</td>
                            <td class="d-flex">
                                <form action="{{ route('produkEdit', $produk->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-success" type="submit">Edit</button>
                                </form>
                                <hr>
                                <form action="{{ route('produkDelete', $produk->id) }}" method="get" class="col">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h1>Kategori</h1>
                <a href="{{ route('kategoriCreate') }}" class="btn btn-primary" role="button">
                    @csrf
                    Tambah Kategori
                </a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getKategori as $item)
                        <tr>
                            <td>{{ $item->namaKategori }}</td>
                            <td>
                                <form action="{{ route('kategoriDelete', $item->id) }}" method="get" class="col">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                                {{-- <a href="{{ route('kategoriDelete', $item->id) }}" class="btn btn-flat btn-danger">Delete</a> --}}
                            </td>                      
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection