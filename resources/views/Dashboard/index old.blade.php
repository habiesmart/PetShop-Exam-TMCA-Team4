@extends('Layout.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('/css/Layout/master.css') }}">
@endsection
@section('content')
    <div class="card text-middle">
        <div class="card-body">
        <h1 class="card-title text-center">PET SHOP</h1>
        <div class="row text-center">
            <div class="col-sm">
                <img src="{{ asset('/img/Honda-Car.png') }}" id="left-car">
            </div>
            <div class="col-sm ">
                {{-- <a href="#" class="btn btn-warning text-center btn-jumbo my-3"></a> --}}
                <div class="container d-flex h-100">
                    <div class="row justify-content-center align-self-center">
                        <h4>
                            Mobil dan Jalanan Adalah Kami
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="card text-middle">
      <div class="card-body">
        {{-- <h4 class="card-title"><i class="fas fa-car"></i></h4> --}}
        <div class="row text-center">
            <div class="col-sm">
                <a href="{{ route('jadwal-belajar')}}" class="btn btn-warning text-center btn-jumbo my-3">Jadwal Belajar</a>
            </div>
            <div class="col-sm">
                <a href="{{ route('paket-jasa')}}" class="btn btn-primary text-center btn-jumbo my-3">Paket Jasa</a>
            </div>
            <div class="col-sm">
                <a href="#trainer" class="btn btn-success text-center btn-jumbo my-3">Trainer Kami</a>
            </div>
        </div>
      </div>
    </div>

    <section id="kendaraan">

        <div class="card text-middle">
            <div class="card-body">
              <h2 class="card-title text-center"><i class="fas fa-car" style="font-size: 24px;"></i>&nbsp;Mobil Kami&nbsp;<i class="fas fa-car" style="font-size: 24px;"></i></h2>
              <div class="row text-center mt-5">
                <div class="col-sm">
                    <img src="{{ asset('/img/bentley.png') }}" style="margin-left: -157px;" width="100%">
                </div>
                <div class="col-sm ">
                    {{-- <a href="#" class="btn btn-warning text-center btn-jumbo my-3"></a> --}}
                    <div class="container d-flex h-100">
                        <div class="row justify-content-center align-self-center">
                            <h4>
                                Bentley
                            </h4>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row text-center mt-5">
                <div class="col-sm ">
                    {{-- <a href="#" class="btn btn-warning text-center btn-jumbo my-3"></a> --}}
                    <div class="container d-flex h-100">
                        <div class="row justify-content-center align-self-center">
                            <h4 style="padding-left:1000%">
                                Ferari
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="{{ asset('/img/ferari.png') }}" width="100%" id="right-car">
                </div>
              </div>

              <div class="row text-center mt-5">
                <div class="col-sm">
                    <img src="{{ asset('/img/Honda-Car.png') }}" style="margin-left: -157px;" width="100%">
                </div>
                <div class="col-sm ">
                    {{-- <a href="#" class="btn btn-warning text-center btn-jumbo my-3"></a> --}}
                    <div class="container d-flex h-100">
                        <div class="row justify-content-center align-self-center">
                            <h4>
                                Civic
                            </h4>
                        </div>
                    </div>
                </div>
              </div>

            </div>
          </div>
    </section>

    <section id="trainer" style="padding-top: 3%">
        <h2 class="text-center">Trainer Kami</h2>
        <div class="row text-center">
            <div class="col">
                <div class="card" style="width: 30rem;">
                    <div class="card-body text-middle">
                        {{-- <h4 class="card-title"><i class="fas fa-car"></i></h4> --}}
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <img class="card-img-top" style="border-top-left-radius: calc(9.25rem - 30px); border-top-right-radius: calc(9.25rem - 30px);" src="{{ asset('/img/Habie.png') }}" alt="">
                                <h1 class="card-title">Habie Budiman</h1>
                                <h3>15 Tahun berpengalaman</h3>
                                <h3>Humoris</h3>
                                <h3>Enjoy</h3>
                                <a href="" class="btn btn-warning container-fluid">kontak Sekarang!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 30rem;">
                    <div class="card-body text-middle">
                        {{-- <h4 class="card-title"><i class="fas fa-car"></i></h4> --}}
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <img class="card-img-top" style="border-top-left-radius: calc(9.25rem - 30px); border-top-right-radius: calc(9.25rem - 30px);" src="{{ asset('/img/Habie.png') }}" alt="">
                                <h1 class="card-title">Habie Budiman</h1>
                                <h3>15 Tahun berpengalaman</h3>
                                <h3>Humoris</h3>
                                <h3>Enjoy</h3>
                                <a href="" class="btn btn-warning container-fluid">kontak Sekarang!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak">
        <div class="card text-middle" style="background-color: #a87732">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-sm" style="border-right: 1px solid rgb(240, 232, 232);">
                        <h4 class="text-light"><i class="fas fa-map-marker"></i> Lokasi</h4>
                        <p class="text-light">Jalan Tiga Putra, Komplek De Fatmawati, Depok</p>
                </div>
                <div class="col-sm">
                    <h4 class="text-light"><i class="fas fa-phone"></i> Kontak</h4>
                    <p class="text-light" style="margin:0px"><a href="tel:+6283892378580" style="text-decoration: none;color: white">Telepon</a></p>
                    <p class="text-light" style="margin:0px"><a href="https://api.whatsapp.com/send/?phone=%2B6283892378580&text=Halo+Habie&type=phone_number&app_absent=0" style="text-decoration: none;color: white">Whatsapp</a></p>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection