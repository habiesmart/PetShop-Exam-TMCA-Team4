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

    <form class="my-5" method="POST" action="{{route('order-save')}}">
        @csrf
        <div class="card-body form-group">
            <label class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control mb-4" id="name" name="name">
            
            <label class="form-label">Nama Peliharaan</label>
            <input type="text" class="form-control mb-4" id="pets_name" name="pets_name">

            <div class="form-group">
              <label for="jenis_hewan">Jenis Hewan</label>
              <select class="form-control" id="jenis_hewan" name="jenis_hewan">
                <option value="">Pilih Jenis Hewan</option>
                <option value="1">Anjing</option>
                <option value="2">Kucing</option>
                <option value="3">Ikan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jenis_hewan">Paket Perawatan</label>
              <select class="form-control" id="paket_perawatan" name="paket_perawatan">
                <option value="">Pilih Paket Perawatan</option>
                <option value="1">Dry Grooming</option>
                <option value="2">Basic Grooming</option>
                <option value="3">Premium Grooming</option>
              </select>
            </div>
            <div class="form-group">
              <label for="born">Tanggal Booking</label>
              <input type="date" class="form-control" id="book_at" name="book_at">
            </div>
            <div class="form-group">
                <button id="submit" type="submit" name="submit" class="btn btn-dark float-right">Save</button>
              </div>
        </div>
    </form>
 
    </div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $("#dtPet").DataTable({
            columns: [
                { data: 'name' },
                { data: 'pets_name' },
                { data: 'jenis_hewan' },
                { data: 'paket_perawatan' },
                { data: 'book_at' },
                { data: '',
                render: (data,type,row) => {
                   return `<a href='' class="text-warning"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</a>`;
                 }}
            ]
        });
    });
</script>
@endsection