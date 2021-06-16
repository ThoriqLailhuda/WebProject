@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('update_dokter', $dktr->id)}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" value="{{$dktr->id}}" required>
                                Nama
                                <input type="text" class="form-control" name="nama" value="{{$dktr->nama}}" required>
                                Id Poli Bagian
                                <input type="text" class="form-control" name="id_poli_bagian" value="{{$dktr->id_poli_bagian}}" required>
                                Nomor Telepon
                                <input type="text" class="form-control" name="no_telp" value="{{$dktr->no_telp}}" required>
                                Harga
                                <input type="text" class="form-control" name="harga" value="{{$dktr->harga}}" required>
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   
                                </form>
</div>
@endsection