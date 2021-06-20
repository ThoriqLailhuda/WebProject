@extends('template.sidebar')

@section('content')
<div class="container">

<form action="{{url('daftar_kunjungan_poli')}}" method="post" required>
                                {{csrf_field()}}
                                Id Periksa
                                <input type="text" class="form-control" name="periksa" required>
                                Biaya Pendaftaran
                                <input type="number" class="form-control" name="biaya_pendaftaran" required>
                                Id Poli Bagian 
                                <input type="number" class="form-control" name="Id_poli_bagian" required>
                                Id Dokter Pemeriksa 
                                <input type="number" class="form-control" name="Id_dokter_pemeriksa" required>
                                Id Perawat Pemeriksa 
                                <input type="text" class="form-control" name="id_perawat_Pemeriksa" required>
                                Id Penyakit
                                <input type="text" class="form-control" name="id_penyakit" required>
                                Created by 
                                <input type="text" class="form-control" name="cretae_by" required>
                                Created at
                                <input type="text" class="form-control" name="create_add" required>
                                Edited by
                                <input type="text" class="form-control" name="edit_by" required>
                                Edited add
                                <input type="text" class="form-control" name="edit_add" required>

                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   

                                </form>
</div>

@endsection