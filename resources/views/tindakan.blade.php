@extends('template.sidebar')

@section('content')

<div class="container">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{route('create_tindakan')}}" class="btn btn-success">Tambah Data</a>
            
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>Id</td>
                    <td>Id Periksa Poli</td>
                    <td>Id Tindakan</td>
                    <td>Harga</td>
                    <td>Jumlah</td>
                    <td>Created by</td>
                    <td>Created at</td>
                    <td>Edited by</td>
                    <td>Edited at</td>
                </tr>
                @foreach($dtTindakan as $item)

                
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->id_periksa_poli}}</td>
                    <td>{{$item->id_tindakan}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->jml}}</td>
                    <td>{{$item->created_by}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->edited_by}}</td>
                    <td>{{$item->edited_at}}</td>
                </tr>
                @endforeach
            </table>

        </div>
    
    </div>

</div>
@endsection
