@extends('templates.master')

@section('title', 'Edit Kategori')

@section('content')
<div class="container">
    <form action="{{ route('kategoriUpdate', $kategori->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" placeholder="Nama Kategori" required name="namaKategori" value="{{ $kategori->namaKategori }}">
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>
@endsection