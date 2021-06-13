@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{route('simpan_ref_tindakan')}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" required>
                                Nama
                                <input type="text" class="form-control" name="nama" required>
                                Harga
                                <input type="int" class="form-control" name="harga" required>
                                Created by 
                                <input type="text" class="form-control" name="created_by" required>
                                Created at
                                <input type="date" class="form-control" name="created_at" required>
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>

                                <br>
                                <input type="SUBMIT" class="btn btn-success">   
                                </form>
</div>
@endsection