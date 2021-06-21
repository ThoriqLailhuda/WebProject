@extends('template.sidebar')

@section('content')

<h2>Daftar Antrian</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="text-align:center" width="20px">No</th>            
        <th style="text-align:center" width="300px">nama_poli</th>
        <th style="text-align:center" width="200px">tindakan </th>
        <th style="text-align:center" width="200px">harga </th>
        <th style="text-align:center" width="200px">jumlah</th> 
        <?php 
        $user = Auth::user();          
            if($user->hasRole('admin_poli')){
                echo "<th>Tindakan</th>";
        }?>
      </tr>
    </thead>
    <tbody>
<?php $nomer=1;  foreach($tindakan as $value) { 
  //if($value->selesai != "selesai"){
  ?>
            <tr>
            <td style="text-align:center">{{$nomer}}</td>
            <td style="text-align:center">{{$value->nama_poli}}</td>
            <td style="text-align:center">{{$value->nama_tindakan}}</td>
            <td style="text-align:center">{{$value->harga}}</td>
            <td style="text-align:center">{{$value->jml}}</td>
            <?php 
        $user = Auth::user();          
            if($user->hasRole('admin_poli')){
                
                echo " <td><button class='btn btn-primary' onclick = 'tambahbhp(".$value->id_periksa_poli.")'>Tambah BHP </button> </td>  " ;
                echo " <td><a  class='btn btn-primary' href='".url('selesai')."/".$value->id_periksa_poli."'>SELESAI DAN BAYAR </a> </td>  " ;
                
       }?>
            <?php  $nomer++;} ?>
</tbody>

<div id="MyModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
        @include('form_bhp')   
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
function tambahbhp(id){
  

  $('#MyModal').modal('show');
}
</script>

@endsection