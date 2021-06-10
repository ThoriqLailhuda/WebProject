@extends('template.sidebar')

@section('content')

<div class="container">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{route('create_ref_poli_bagian')}}" class="btn btn-success">Tambah Data</a>
            
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>Id</td>
                    <td>Nama</td>
                    <td>Harga Pendaftaran</td>
                    <td>Id User</td>
                    <td>Created by</td>
                    <td>Created at</td>
                    <td>Edited by</td>
                    <td>Edited at</td>
                </tr>
                @foreach($dtRefPoliBagian as $item)

                
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->harga_pendaftaran}}</td>
                    <td>{{$item->id_user}}</td>
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
