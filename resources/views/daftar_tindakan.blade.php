@extends('template.sidebar')

@section('content')
<table class="table table-bordered">
    <thead>
    <tr>
   
        <th style="text-align:center" width="20px">No</th>            
        <th style="text-align:center" width="300px">id_periksa_poli</th>
        <th style="text-align:center" width="200px">id_tindaka</th>
        <th style="text-align:center" width="200px">harga </th>
        <th style="text-align:center" width="200px">jml</th>

        <?php 
        $user = Auth::user();          
            if($user->hasRole('admin_poli')){
                echo "<th>Rujuk Ke Poli Lain </th>";
        }?>
        </tr>
     
      </thead>
<tbody>
<?php $nomer=1; foreach($tindakan as $value) { ?>
            <tr>
            <td style="text-align:center">{{$nomer}}</td>
            <td style="text-align:center">{{$value->id_periksa_poli}}</td>
            <td style="text-align:center">{{$value->id_tindakan}}</td>
            <td style="text-align:center">{{$value->harga}}</td>
            <td style="text-align:center">{{$value->jml}}</td>
            <?php 
        $user = Auth::user();          
            if($user->hasRole('admin_poli')){
                if ($value-> id_obat == '' ) {
                echo " <td><button class='btn btn-primary' onclick = 'kunjungan_poli(".$value->id_periksa_poli.")'>Masukan obat</button> </td>  " ;
                }
       }?>
            <?php $nomer++;} ?>
</tbody>

<div id="MyModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
        @include('form_obat')
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
    document.getElementById('id_periksa_poli').value=id_periksa;
  $('#MyModal').modal('show');
}
</script>


@endsection