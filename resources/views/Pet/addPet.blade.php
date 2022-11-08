@extends('Layout.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('/css/Layout/master.css') }}">
@endsection
@section('content')
<div class="card text-bg-dark text-middle">
    <div class="card-head mt-4 mb-1">
        <h1 class="card-title text-center text-primary">Daftar Peliharaan Kesayangan Anda </h1>
    </div>
</div>

<container class="card text-bg-dark">
    <img class="card-img-top" src="" alt="">
      <div class="card-body">
        <h4 class="card-title"><a href="{{route('pet')}}" class="btn btn-primary float-right">Kembali</a></h4>
        <p class="card-text"></p>
        <form class="my-5" method="POST" action="{{route('pet-save')}}">
            @csrf
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Bony.. Kitty..">
            </div>
            <div class="form-group">
              <label for="born">Tanggal Lahir</label>
              <input type="date" class="form-control" id="born" name="born" placeholder="It was born..">
            </div>
            <div class="form-group">
              <label for="jenis_hewan">Jenis Hewan</label>
              <select class="form-control" id="jenis_hewan" name="jenis_hewan">
                <option value="">Pilih Jenis Hewan</option>
                <option value="anjing">Anjing</option>
                <option value="kucing">Kucing</option>
                <option value="ikan">Ikan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="aboutme">Ceritakan Hewanmu</label>
              <textarea class="form-control" id="aboutme" rows="5" name="aboutme"></textarea>
            </div>
            <div class="form-group">
                <button id="submit" type="submit" name="submit" class="btn btn-dark float-right">Save</button>
              </div>
          </form>
      </div>
</container>

</div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $("#dtPet").DataTable({
            columns: [
                { data: 'name' },
                { data: 'age' },
                { data: 'jenis_hewan' },
                { data: '',
                render: (data,type,row) => {
                   return `<a href='' class="text-warning"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</a>`;
                 }}
            ]
        });
    });
</script>
@endsection