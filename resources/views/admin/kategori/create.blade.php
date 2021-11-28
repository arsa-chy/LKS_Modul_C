@extends('templates.master')

@section('title', 'Tambah Kategori')

@section('content')
<div class="container">
    <form action="{{ route('kategoriCreate') }}" method="post">
        @csrf
        <input type="text" placeholder="Nama Kategori" required name="namaKategori">
        <button class="btn btn-primary" type="submit">Tambah</button>
    </form>
</div>
@endsection