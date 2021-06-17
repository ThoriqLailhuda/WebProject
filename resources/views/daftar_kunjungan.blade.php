@extends('template.sidebar')

@section('content')

@if (session('success'))
                    <script>
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                      )
                    </script>
                    @endif
<div class="container">
  <h2>Daftar Antrian</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="text-align:center" width="20px">No</th>            
        <th style="text-align:center" width="300px">Nama</th>
        <th style="text-align:center" width="200px">penyakit</th>
        <th style="text-align:center" width="200px">Tekanan darah </th>
        <th style="text-align:center" width="200px">Denyut nadi</th>
        <th style="text-align:center" width="200px">Usia Bulan</th>
        <th style="text-align:center" width="200px">Usia hari</th>  
        <?php 
        $user = Auth::user();          
            if($user->hasRole('admin')){
                echo "<th>Tindakan</th>";
        }?>

      </tr>
    </thead>
    <tbody>
        <?php $nomer=1; foreach($kunjungan as $value) { ?>
            <tr>
            <td style="text-align:center">{{$nomer}}</td>
            <td style="text-align:center">{{$value->nama}}</td>
            <td style="text-align:center">{{$value->indonesian_name}}</td>
            <td style="text-align:center">{{$value->tekanan_darah}}</td>
            <td style="text-align:center">{{$value->denyut_nadi}}</td>
            <td style="text-align:center">{{$value->usia_bulan}}</td>
            <td style="text-align:center">{{$value->usia_hari}}</td>
           <?php $user = Auth::user();
              if($user->hasRole('admin_poli')){
                  $parse = $value->id.',"'.$value->nama.'","'.$value->tanggal_rencana_datang.'",'.$value->int_telp.','.$value->id_pasien.',"'
                  .$value->nama_penyakitpoli.'","'.$value->nama_dokter.'","'.$value->indonesian_name.'",' .$value->id_poli .','
                  .$value->id_dokter.','.$value->id_penyakit.','.$value->id_reservasi ;
                  echo " <td><button class='btn btn-success' onclick = 'kunjungan_poli(".$parse.")'>isi kunjungan POLI </button> </td>  ";             
           }?>        
            </tr>
        <?php $nomer++; } ?>
<div id="MyModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
                    @include('form_poli')
                </div>
            </div>
        </div>      
<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
function kunjungan_poli(id , nama ,tanggalpemesanan , nomerhp,id_pasien, nama_penyakitpoli,nama_dokter,indonesian_name, id_poli ,id_dokter,id_penyakit, id_reservasi){
  document.getElementById("nama_poli").value = nama_penyakitpoli;
  document.getElementById("id_poli").value = id_poli;
  document.getElementById("id_dokter").value = id_dokter;
  document.getElementById("id_penyakit").value = id_penyakit;
  document.getElementById("nama_dokter").value = nama_dokter;
  document.getElementById("nama_penyakit").value = indonesian_name;
  document.getElementById("id_reservasi").value = id_reservasi;
  $('#MyModal').modal('show');
}
</script>



@endsection