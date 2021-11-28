@extends('templates.master')

@section('title', 'Produk')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Produk</h1>
                <a href="produk/create" class="btn btn-primary btn-sm" {{ request()->is('/') ? 'active' : ''}}>
                    @csrf
                    <p>Tambah Produk</p>
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
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $produk->namaProduk }}</td>
                            <td>{{ $produk->beratProduk }}</td>
                            <td>{{ $produk->tanggalProduksi }}</td>
                            <td>{{ $produk->hargaProduk }}</td>
                            <td>{{ $produk->idKategori }}</td>
                            <td>
                                <form action="{{ route('produkEdit', $produk->id) }}" method="get">
                                    @csrf
                                    <button class="btn btn-success" type="submit">Edit</button>
                                </form>
                            </td>
                            <td><a href="{{ route('produkDelete', $produk->id) }}" class="btn btn-flat btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1>Kategori</h1>
                <a href="kategori/create" class="btn btn-primary btn-sm" {{ request()->is('/') ? 'active' : ''}}>
                @csrf
                <p>Tambah Kategori</p>
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
                            <td><a href="{{ route('kategoriDelete', $item->id) }}" class="btn btn-flat btn-danger">Delete</a></td>                      
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection