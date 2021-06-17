@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('update_tindakan', $tndkn->id)}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" value="{{$tndkn->id}}" required>
                                Id Periksa Poli
                                <input type="text" class="form-control" name="id_periksa_poli" value="{{$tndkn->id_periksa_poli}}" required>
                                Id Tindakan
                                <input type="text" class="form-control" name="id_tindakan" value="{{$tndkn->id_tindakan}}" required>
                                Harga 
                                <input type="text" class="form-control" name="harga" value="{{$tndkn->harga}}" required>
                                Jumlah 
                                <input type="text" class="form-control" name="jml" value="{{$tndkn->jml}}" required>
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   
                                </form>
</div>
@endsection