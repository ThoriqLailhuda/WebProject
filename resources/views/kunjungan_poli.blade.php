@extends('template.sidebar')

@section('content')
<div class="container">

<form action="{{url('daftar_kunjungan_poli')}}" method="post" required>
                                {{csrf_field()}}
                                Id periksa
                                <input type="text" class="form-control" name="periksa" required>
                                Biaya Pendaftaran
                                <input type="number" class="form-control" name="biaya_pendaftaran" required>
                                Id_poli_bagian 
                                <input type="number" class="form-control" name="Id_poli_bagian" required>
                                Id Dokter Pemeriksa 
                                <input type="number" class="form-control" name="Id_dokter_pemeriksa" required>
                                id perawat Pemeriksa 
                                <input type="text" class="form-control" name="id_perawat_Pemeriksa" required>
                                id Penyakit
                                <input type="text" class="form-control" name="id_penyakit" required>
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