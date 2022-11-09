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
                                {{-- <tr>
                                    <td scope="row"> {{ $order->pets->name }}</td>
                                    <td>{{ $order->pets->jenis_hewan }}</td>
                                    <td>{{ $order->paket_perawatans->nama_paket }}</td>
                                    <td>date("Y-m-d", {{ $order->book_at }})</td>
                                </tr> --}}
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    var dtOrder;
    var objData;
    $(document).ready(function(){
        InitiateDataTable();
        InitiateData();
    });

    function InitiateDataTable(){
        dtOrder = $("#dtOrder").DataTable({
                    columns: [
                        { data: 'name' },
                        { data: 'born',
                        render:  (data,type,row) => {
                            debugger;
                            // var yearsAge = moment(new Date(Date.now())).diff(row.born, 'years');
                            var monthsAge = moment(new Date(Date.now())).diff(row.born, 'months');
                            // var daysAge = moment(new Date(Date.now())).diff(row.born, 'days');
                            // return `<b>${yearsAge}</b> Tahun, <b>${monthsAge}</b> Bulan, <b>${daysAge}</b> Hari`;
                            return `<b>${monthsAge}</b> Bulan`;
                        }
                    },
                    { data: 'jenis_hewan' },
                        { data: '',
                        render: (data,type,row) => {
                        return `<a href='' class="text-warning"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</a> | 
                        <a href='/pet-delete/${row.id}' class="text-danger"><i class="fas fa-trash-alt"></i> Delete</a>`;
                        }
                    }
                    ]
                });
    }

    function InitiateData(){
        $.ajax({
            type: "POST",
            url: "list-pet",
            data: { _token: "{{ csrf_token() }}" },
            datatype: "json",
            success: function (data) {
                if (data.status == true) {
                    SetObjectData(data.data);
                    DataToUIDetail();
                } else {
                    console.log("Error Message");
                }
            },
            error: function (retDat) {
                console.log("Error Message");
            }
        });
    }

    function DataToUIDetail(){
        dtPet.clear();
        for (let i = 0; i < objData.length; i++) {
            var dataHewan = objData[i];
            dtPet.row.add(dataHewan);
        }
        dtPet.draw();
    }

    function SetObjectData(data){
        objData = data;
    }
    function GetObjectData(){
        return objData;
    }
</script>
@endsection