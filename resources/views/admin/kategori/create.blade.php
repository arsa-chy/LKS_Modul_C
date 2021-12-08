@extends('templates.master')

@section('title', 'Tambah Kategori')

@section('content')
<div class="card card-login mx-auto mt-3">
    <div class="card-header">
        <h3 class="card-title">Tambah Kategori</h3>
    </div>
    <form action="{{ route('kategoriStore') }}" method="POST">
    @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="namaKategori" class="form-label">Nama Kategori</label>
                <input type="text" placeholder="Nama Kategori" required name="namaKategori" class="form-control">
            </div>
        </div>
        
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Tambah</button>
        </div>
    </form>
</div>
@endsection