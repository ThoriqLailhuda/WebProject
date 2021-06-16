@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('update_obat', $obt->id)}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" value="{{$obt->id}}" required>
                                Id Periksa Poli
                                <input type="text" class="form-control" name="id_periksa_poli" value="{{$obt->id_periksa_poli}}" required>
                                Id Obat
                                <input type="text" class="form-control" name="id_obat" value="{{$obt->id_obat}}" required>
                                Harga
                                <input type="text" class="form-control" name="harga" value="{{$obt->harga}}" required>
                                Jumlah
                                <input type="text" class="form-control" name="jml" value="{{$obt->jml}}" required>
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   
                                </form>
</div>
@endsection