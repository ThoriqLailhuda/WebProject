@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('daftar_kunjungan')}}" method="post" required>
                                {{csrf_field()}}
                                Nama
                                <input type="text" class="form-control" name="Id_reservasi" required><br>
                                Id Poli Bagian
                                <input type="number" class="form-control" name="id_penyakit" required><br>
                                No HP
                                <input type="number" class="form-control" name="tekanan_darah" required><br>
                                
                                <input type="number" class="form-control" name="denyut_nadi" required><br>
                                Usia Bulan 
                                <input type="text" class="form-control" name="usia_bulan" required><br>
                                Usia Hari 
                                <input type="text" class="form-control" name="usia hari" required><br>
                                Created by 
                                <input type="text" class="form-control" name="cretae_by" required><br>
                                Created at
                                <input type="text" class="form-control" name="create_add" required><br>
                                Edited by
                                <input type="text" class="form-control" name="edit_by" required><br>
                                Edited at
                                <input type="text" class="form-control" name="edit_add" required><br>

                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   

                                </form>
</div>
@endsection