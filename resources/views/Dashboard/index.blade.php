@extends('Layout.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('/css/Layout/master.css') }}">
@endsection
@section('content')
<div class="card text-bg-dark text-middle">
    <div class="card-head mt-4 mb-1">
        <h1 class="card-title text-center text-primary">Selamat Datang di Layanan Pet Care Kami!</h1>
    </div>
</div>

<container class="card text-bg-dark">
    <img src="{{ asset('/img/header_bg1.jpg') }}" class="card-img" style="height:30rem;object-fit: cover;">
    <div class="card-img-overlay text-light" style="padding: 8rem 7rem;padding-right:15rem;">
        <h2 class="card-title">Daftarkan Peliharaan Kesayangan Anda Sekarang!</h2>
        <p class="card-text h5">Rawat peliharaan kesayangan anda dengan pelayanan kami yang mudah dan cepat! kami memiliki fasilitas klinik hewan terbaik dan terlengkap di Asia dengan dokter hewan bersertifikasi internasional.</p>

        <a href="{{route('order')}}"><button type="button" class="btn btn-primary btn-lg mt-4 mr-4">Pesan Sekarang</button></a>
        <a href="{{route('order-list')}}"><button type="button" class="btn btn-outline-light btn-lg mt-4">Lihat Pesanan Saya</button></a>
    </div>
    
</container>

</div>
@endsection