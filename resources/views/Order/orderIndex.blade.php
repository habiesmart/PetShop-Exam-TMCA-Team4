@extends('Layout.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('/css/Layout/master.css') }}">
@endsection
@section('content')
    <div class="card text-middle">
      <div class="card-body">
        <h4 class="card-title">Order List <a name="" id="" class="btn btn-primary float-right" href="{{route('home')}}" role="button">Kembali</a></h4>
        <div class="row text-center mt-3">
            <div class="col-sm">
                <table class="table table-striped table-inverse">
                    <thead class="bg-secondary">
                        <tr>
                            <th>Nama Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Nama Perawatan</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td scope="row">{{ $order->pets->name }}</td>
                                    <td>{{ $order->pets->jenis_hewan }}</td>
                                    <td>{{ $order->paket_perawatans->nama_paket }}</td>
                                    <td>date("Y-m-d", {{ $order->book_at }})</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
@endsection