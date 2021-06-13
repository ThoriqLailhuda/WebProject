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
        <th>Tanggal Datang</th>
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
                  echo " <td><button class='btn btn-primary' onclick = 'Lengkapi_data(".$value->id.")'>lengkapi data </button> </td>  ";
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
        
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
function Lengkapi_data(id){
  $('#myModal').modal('show');
}
</script>

@endsection