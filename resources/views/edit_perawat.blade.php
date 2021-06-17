@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('update_perawat', $prwt->id)}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" value="{{$prwt->id}}" required>
                                Nama
                                <input type="text" class="form-control" name="nama" value="{{$prwt->nama}}" required>
                                Nomor Telepon
                                <input type="text" class="form-control" name="no_telp" value="{{$prwt->no_telp}}" required>                              
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   
                                </form>
</div>
@endsection