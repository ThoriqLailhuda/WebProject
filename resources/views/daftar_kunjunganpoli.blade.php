@extends('template.sidebar')

@section('content')
<table class="table table-bordered">
    <thead>
    <tr>

        <th style="text-align:center" width="20px">No</th>            
        <th style="text-align:center" width="300px">id_pemeriksan</th>
        <th style="text-align:center" width="200px">biaya_pendaftaran</th>
        <th style="text-align:center" width="200px">id_poli_bagian </th>
        <th style="text-align:center" width="200px">id_perawat_pemeriksa</th>

        <?php 
        $user = Auth::user();          
            if($user->hasRole('admin_poli')){
                echo "<th>Rujuk Ke Poli Lain </th>";
        }?>

      </tr>
      </thead>
<tbody>
<?php $nomer=1; foreach($kunjungan_poli as $value) { ?>
            <tr>
            <td style="text-align:center">{{$nomer}}</td>
            <td style="text-align:center">{{$value->nama}}</td>
            <td style="text-align:center">{{$value->indonesian_name}}</td>
            <td style="text-align:center">{{$value->tekanan_darah}}</td>
            <td style="text-align:center">{{$value->denyut_nadi}}</td>
            <td style="text-align:center">{{$value->usia_bulan}}</td>
            <td style="text-align:center">{{$value->usia_hari}}</td>

</tbody>

@endsection