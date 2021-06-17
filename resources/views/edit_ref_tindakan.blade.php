@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('update_ref_tindakan', $refTndkn->id)}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" value="{{$refTndkn->id}}" required>
                                Nama
                                <input type="text" class="form-control" name="nama" value="{{$refTndkn->nama}}" required>
                                Harga
                                <input type="int" class="form-control" name="harga" value="{{$refTndkn->harga}}" required>
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   
                                </form>
</div>
@endsection