@extends('template.sidebar')

@section('content')
form action="{{url('simpan_kunjungan')}}" method="post" required>
                                {{csrf_field()}}
                                Periksa Poli
                                <input type="text" class="form-control" name="id_reservasi" id="id_periksa_poli" required>
                                Nama Pasien
                                <input type="text" class="form-control" name="id_pasien" id="id_pasien" required>
                                Id Penyakit 
                                <input type="text" class="form-control" id="id_penyakit"  onchange="penyakitkunjungan()" required>
                                <input type="hidden" id="penyakit" name="id_penyakit">
                                   <div id="hasil"> </div>
                                Tekanan Darah 
                                <input type="number" class="form-control" name="tekanan_darah" required>
                                Denyut Nadi
                                <input type="number" class="form-control" name="denyut_nadi" required>
                                Usia Bulan 
                                <input type="text" class="form-control" name="usia_bulan" required>
                                Usia Hari 
                                <input type="text" class="form-control" name="usia hari" required>
                                Created by 
                                <input type="text" class="form-control" name="created_by" required>
                                Created at
                                <input type="text" class="form-control" name="created_at" >
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="text" class="form-control" name="edited_at" >

                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   

                                </form>

    

@endsection
