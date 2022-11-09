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
        <h4 class="card-title"><a href="{{route('pet-detail')}}" class="btn btn-success float-right">Daftarkan</a></h4>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    var dtPet;
    var objData;
    $(document).ready(function(){
        InitiateDataTable();
        InitiateData();
    });

    function InitiateDataTable(){
        dtPet = $("#dtPet").DataTable({
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
                        return `<a href='/pet-detail/${row.id}' class="text-warning"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit</a> | 
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