@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('update_ref_penyakit_icd', $refPnyktIcd->id)}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" value="{{$refPnyktIcd->id}}" required>
                                Kode
                                <input type="text" class="form-control" name="kode" value="{{$refPnyktIcd->kode}}" required>
                                Nama
                                <input type="text" class="form-control" name="nama" value="{{$refPnyktIcd->nama}}" required>
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   
                                </form>
</div>
@endsection