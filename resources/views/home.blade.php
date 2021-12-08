@extends('templates.master')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to My Shop!</h1>
        <p>Check Out our latest product that might be what you need for your next project in our product gallery</p>
      </div>
    </div>

  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <h1>My Shop</h1>
                    </div>
                    <div class="col">
                        <p>{{ \Cart::getTotalQuantity() }} Produk sudah ditambahkan</p>
                    </div>
                </div>
                <hr>
                <div class="h-50 overflow-scroll">
                    @foreach ($getProduk as $produk)
                    <div class="card mb-3">
                        <div class="card-header">
                            <h4><strong>{{ $produk->id }}</strong></h4>
                        </div>
                        <div class="card-body">
                            <div class="row"> 
                                <div class="col-md-4">
                                    <h4><strong>{{ $produk->namaProduk }}</strong></h4>
                                    <small>Berat : {{ $produk->beratProduk }} | {{ $produk->tanggalProduksi }}</small>
                                </div>
                                <div class="col-md-4">
                                    Rp. {{ number_format($produk->hargaProduk) }} <br>
                                    {{ $produk->kategori->namaKategori }}
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <form action="{{ route('hitungJumlah') }}" class="d-flex" method="post">
                                            @csrf
                                            <input type="hidden" name="idProduk" value="{{ $produk->id }}">
                                            <input type="number" class="form-control" name="jumlahHarga" value="0" min="0">
                                            <button class="btn btn-outline-secondary" type="submit">Tambah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr>
                {{-- <h1>Paket Pengiriman</h1>
                <div class="row">
                    <div class="col-md-5 d-flex">
                        <select class="col-12 form-select" id="paket" aria-label="Default select example">
                            <option selected>Pilih Paket</option>
                            @foreach ($paket as $item)
                            <option value="{{ $item->hargaPaket }}">{{ $item->namaPaket }}</option>
                            @endforeach
                        </select>
                        <input type="button" class="col btn btn-secondary btn-sm" onclick="getPaket()" value="Check">
                    </div>
                    <div class="col-md-12 d-flex justify-content-end"><h1>Rp.</h1> <h1 id="select-paket">0</h1></div>
                </div>
                <hr>
                <div class="row justify-content-end">
                    <div class="col-md-auto">
                        <h1>Total :</h1> 
                    </div>
                    <div class="col-md-auto">
                        <h1>Rp. {{ \Cart::getTotal() }}</h1>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function rubah(angka){
            var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            return ribuan;
        }
        function getPaket() {
            let paket = document.getElementById('paket');
            document.getElementById('select-paket').innerHTML = rubah(paket.options[paket.selectedIndex].value);
        }
    </script>
@endpush