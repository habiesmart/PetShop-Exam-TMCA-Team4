@extends('Layout.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('/css/Layout/master.css') }}">
@endsection
@section('content')
    <div class="card text-middle">
      <div class="card-body">
        <h4 class="card-title"><i class="fas fa-book"></i>&nbsp;Paket Perawatan <a name="" id="" class="btn btn-primary float-right" href="{{route('home')}}" role="button">Kembali</a></h4>
        <div class="row text-center mt-5">
          @foreach ($pakets as $paket)
            <div class="col-sm mt-5">
              <div class="card text-white bg-light">
                <div class="card-body">
                  <h2 class="card-title text-dark">Rp. {{ $paket->harga_paket }}</h2>
                  <div class="text-dark">
                    <h4>{{ $paket->nama_paket }}
                    <h5>{{ $paket->deskripsi_paket }}</h5>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
@endsection