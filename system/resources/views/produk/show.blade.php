@extends('admin.template.base')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-10 mt-5">
          <div class="card">
              <div class="card-header">
                  detail Data produk
              </div>

              <div class="card-body">
                  <h1> {{$produk->nama}}</h1>
                  <hr>
                  <p>
                      Rp. {{ number_format( $produk->harga) }} <br>
                      Stok {{ $produk->stok }} |
                      Berat {{ $produk->berat }}
                  </p>
                  <p>
                       {!! nl2br($produk->deskripsi) !!}
                  </p>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection