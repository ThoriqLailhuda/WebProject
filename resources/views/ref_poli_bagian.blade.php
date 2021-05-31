@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('daftar_kunjungan')}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" required>
                                Nama
                                <input type="text" class="form-control" name="nama" required>
                                Harga Pendaftaran
                                <input type="int" class="form-control" name="harga_pendaftaran" required>
                                Id User
                                <input type="text" class="form-control" name="id_user" required>
                                Create by 
                                <input type="text" class="form-control" name="cretae_by" required>
                                Create add
                                <input type="text" class="form-control" name="create_add" required>
                                Edited by
                                <input type="text" class="form-control" name="edit_by" required>
                                Edited Add
                                <input type="text" class="form-control" name="edit_add" required>

                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   

                                </form>
</div>
@endsection