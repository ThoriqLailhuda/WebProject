@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('daftar_kunjungan')}}" method="post" required>
                                {{csrf_field()}}
                                Id reservasi
                                <input type="text" class="form-control" name="Id_reservasi" required>
                                Id Penyakit 
                                <input type="number" class="form-control" name="id_penyakit" required>
                                Tekanan Darah 
                                <input type="number" class="form-control" name="tekanan_darah" required>
                                Denyut Nadi
                                <input type="number" class="form-control" name="denyut_nadi" required>
                                Usia Bulan 
                                <input type="text" class="form-control" name="usia_bulan" required>
                                Usia hari 
                                <input type="text" class="form-control" name="usia hari" required>
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