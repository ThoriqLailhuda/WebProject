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
        <th style="text-align:center" width="200px">Tanggal Reservasi</th>
        <th style="text-align:center" width="200px">No HP</th>

        <?php 
        $user = Auth::user();
        if($user->hasRole('admin')){
          echo "<th>Keterangan</th>";
        }?>
      </tr>
    </thead>
    <tbody>
        <?php $nomer=1; foreach($reservasi as $value){ 
          
            if ($value->id_penyakit > 0)  {
        ?>
            <tr>
            <td style="text-align:center">{{$nomer}}</td>
            <td style="text-align:center">{{$value->nama}}</td>
            <td style="text-align:center">{{$value->tanggal_rencana_datang}}</td>
            <td style="text-align:center">{{$value->int_telp}}</td>
            <?php 
              $user = Auth::user();
              if($user->hasRole('admin')){
                if($value-> id_poli_bagian != ''){
                  $parse = $value->id.',"'.$value->nama.'","'.$value->tanggal_rencana_datang.'",'.$value->int_telp.','.$value->id_pasien;
                  echo " <td><button class='btn btn-success' onclick = 'masukan_kunjungan(".$parse.")'>Masukan Kunjungan  </button> </td>  ";
                }
                else {
                $parse = $value->id.',"'.$value->nama.'","'.$value->tanggal_rencana_datang.'",'.$value->int_telp;
                echo " <td><button class='btn btn-primary' onclick = 'Lengkapi_data(".$parse.")'>lengkapi data </button> </td>  ";
                }
           }?>
            </tr>
        <?php $nomer++;} } ?>
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

<div id="MyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
                @include('kunjungan')
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

function masukan_kunjungan(id , nama ,tanggalpemesanan , nomerhp , id_pasien ){
  document.getElementById("id_reservasi").value = id ;
  document.getElementById("id_pasien").value = id ;
  $('#MyModal').modal('show');
}

function penyakitkunjungan(){
  var search = document.getElementById("id_penyakit").value ;
  $.ajax({
            url: "{{url('searchpenyakit')}}/" + search,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(response) {
              for (i = 0; i < response.length; i++){
                console.log(response[i]['indonesian_name']);
                var hasil = document.createElement("P");
                hasil.innerHTML = response[i]['indonesian_name'];
                hasil.setAttribute("onclick", "myFunction("+response[i]['id']+",'"+response[i]['indonesian_name']+"')");
                document.getElementById('hasil').appendChild(hasil);

              }
                
            }
        });
}
function myFunction(id,val){
  document.getElementById("penyakit").value = id;                  
  document.getElementById("id_penyakit").value = val;               
  document.getElementById('hasil').innerHTML = "";
}
</script>

@endsection