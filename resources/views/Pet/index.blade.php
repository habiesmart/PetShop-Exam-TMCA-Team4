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
        <h4 class="card-title"><a href="{{route('pet-register')}}" class="btn btn-success float-right">Daftarkan</a></h4>
        <p class="card-text"></p>
        <table id="dtPet" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Hewan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Anjing Bony</td>
                    <td>21 Bulan</td>
                    <td>Anjing</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Kitty</td>
                    <td>6 Bulan</td>
                    <td>Kucing</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
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