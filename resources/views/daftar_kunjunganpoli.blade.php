@extends('template.sidebar')

@section('content')
<table class="table table-bordered">
    <thead>
    <tr>
   
        <th style="text-align:center" width="20px">No</th>            
        <th style="text-align:center" width="300px">Id Pemeriksan</th>
        <th style="text-align:center" width="200px">Biaya Pendaftaran</th>
        <th style="text-align:center" width="200px">Id Poli Bagian </th>
        <th style="text-align:center" width="200px">Id Perawat Pemeriksa</th>

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
            <td style="text-align:center">{{$value->id_periksa}}</td>
            <td style="text-align:center">{{$value->harga_pendaftaran}}</td>
            <td style="text-align:center">{{$value->id_poli_bagian}}</td>
            <td style="text-align:center">{{$value->id_perawat_pemeriksa}}</td>
            <?php 
        $user = Auth::user();          
            if($user->hasRole('admin_poli')){
                echo " <td><button class='btn btn-primary' >Rujuk Poli </button>  " ;
                if($value->id_periksa_poli == ""){
                    echo " <button class='btn btn-primary' onclick = 'kunjungan_poli(".$value->id_periksa.")'>masukan tabel tindakan  </button> </td>  " ;
                }
        }?>
            <?php $nomer++;} ?>
</tbody>

<div id="MyModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
                    @include('form_tindakan')
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
function kunjungan_poli(id_periksa){
document.getElementById('id_periksa_poli').value = id_periksa ;

  $('#MyModal').modal('show');
}
</script>


@endsection