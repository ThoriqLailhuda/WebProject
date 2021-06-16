@extends('template.sidebar')

@section('content')

<script src="https://kit.fontawesome.com/edd0d38ada.js" crossorigin="anonymous"></script>

<div class="container">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <a href="{{route('create_ref_penyakit_icd')}}" class="btn btn-success">Tambah Data</a>
            
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>Id</td>
                    <td>Kode</td>
                    <td>Nama</td>
                    <td>Created by</td>
                    <td>Created at</td>
                    <td>Edited by</td>
                    <td>Edited at</td>
                    <td></td>
                </tr>
                @foreach($dtRefPenyakitIcd as $item)

                
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->kode}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->created_by}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->edited_by}}</td>
                    <td>{{$item->edited_at}}</td>
                    <td><a href="{{url('edit_ref_penyakit_icd', $item->id)}}"><i class="fas fa-edit"></i></a>
                     | <a href="{{url('delete_ref_penyakit_icd', $item->id)}}"><i class="fas fa-trash" style="color:red"></i></a></td>

                </tr>
                @endforeach
            </table>

        </div>
    
    </div>

</div>
@endsection
