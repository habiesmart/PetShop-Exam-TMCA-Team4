@extends('Layout.master')
@section('style')
<body style=
"background-image: url({{asset('/img/header_bg1.jpg')}});
  background-repeat: no-repeat;
  background-size: cover;
  font-size: 14px;
  font-weight: 400;
  font-family: 'Nunito', 'Segoe UI', arial;
  color: #6c757d;">
@endsection

@section('content')
    <div class="card p-5" style="background-color:white; margin: 1rem 20%;">
        <h3 class="text-primary text-center mb-3">Formulir pemesanan</h3>

        <div class="card-body form-group">
            <label class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control mb-4">
            
            <label class="form-label">Nama Peliharaan</label>
            <input type="text" class="form-control mb-4">

            <label class="form-label">Jenis Hewan</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault">
                <label class="form-check-label" for="flexRadioDefault1">
                    Kucing
                </label>
            </div>
            <div class="form-check mb-4">
                <input class="form-check-input" type="radio" name="flexRadioDefault">
                <label class="form-check-label" for="flexRadioDefault2">
                    Anjing
                </label>
            </div>

            <label class="form-label">Paket Perawatan</label><br>
           
        </div>
 
    </div>
@endsection