@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('update_ref_poli_bagian', $refPlBgn->id)}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" value="{{$refPlBgn->id}}" required>
                                Nama
                                <input type="text" class="form-control" name="nama" value="{{$refPlBgn->nama}}" required>
                                Harga Pendaftaran
                                <input type="int" class="form-control" name="harga_pendaftaran" value="{{$refPlBgn->harga_pendaftaran}}" required>
                                Id User
                                <input type="text" class="form-control" name="id_user" value="{{$refPlBgn->id_user}}" required>
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   
                                </form>
</div>
@endsection