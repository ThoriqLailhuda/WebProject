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
  <h2>Bordered Table</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>            
        <th>Nama</th>
        <th>tanggal datang</th>
        <th>No HP</th>

        <?php 
        $user = Auth::user();
        if($user->hasRole('admin')){
          echo "<th>tindakan</th>";
        }?>
      </tr>
    </thead>
    <tbody>
        <?php $nomer=1; foreach($reservasi as $value){ ?>
            <tr>
            <td>{{$nomer}}</td>
            <td>{{$value->nama}}</td>
            <td>{{$value->tanggal_rencana_datang}}</td>
            <td>{{$value->int_telp}}</td>
            <?php 
              $user = Auth::user();
              if($user->hasRole('admin')){
                if($value-> id_poli_bagian != ''){
                  echo " <td><button class='btn btn-success' onclick = 'Lengkapi_data(".$value->id.")'>Masukan Kunjungan  </button> </td>  ";
                }
                else {
                $parse = $value->id.',"'.$value->nama.'","'.$value->tanggal_rencana_datang.'",'.$value->int_telp;
                echo " <td><button class='btn btn-primary' onclick = 'Lengkapi_data(".$parse.")'>lengkapi data </button> </td>  ";
                }
           }?>
            </tr>
        <?php $nomer++; } ?>
    </tbody>
  </table>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <form action="{{url('simpan_reservasi_admin')}}" method="post" required>
                {{csrf_field()}}   
                Nama
                <input type="text" class="form-control" disabled  id="nama">
                Tanggal Pemesanan
                <input type="text" class="form-control" disabled  id="tanggalpemesanan">
                NO HP
                <input type="text" class="form-control" disabled id="nohp">
                POLI Bagian
                <select name="id_poli_bagian" class="form-control" > 
                <?php foreach($reservasi_polibagian as $reservasipoli) { ?>
                <option value="{{$reservasipoli->id}}"> {{$reservasipoli->nama}} </option>
                <?php } ?>
                </select>
                Dokter
                <select name="id_dokter" class="form-control" > 
                <?php foreach($reservasi_dokter as $reservasidokter) { ?>
                <option value="{{$reservasidokter->id}}"> {{$reservasidokter->nama}} </option>
                <?php } ?>
                </select>
                Status Pasien
                    <input type="text" class="form-control" name="status_pasien"required>
                Creat By  
                    <input type="text" class="form-control" name="created_by"required>
                edited by
                    <input type="text" class="form-control" name="edited_by"required>    
                 <input type="hidden" class="form-control" name="id"required id="id">
                <br>
                <input type="SUBMIT" class="btn btn-primary">
                
                    </form>                 
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
function Lengkapi_data(id , nama ,tanggalpemesanan , nomerhp  ){
  document.getElementById("id").value = id ;
  document.getElementById("nama").value = nama ;
  document.getElementById("tanggalpemesanan").value = tanggalpemesanan ;
  document.getElementById("nohp").value = nomerhp ;
  $('#myModal').modal('show');
}
</script>

@endsection