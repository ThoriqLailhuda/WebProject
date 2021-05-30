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
      </tr>
    </thead>
    <tbody>
        <?php $nomer=1; foreach($reservasi as $value){ ?>
            <tr>
            <td>{{$nomer}}</td>
            <td>{{$value->nama}}</td>
            <td>{{$value->tanggal_rencana_datang}}</td>
            <td>{{$value->int_telp}}</td>

              
          <?php  if (Auth::user()->level==1){ ?>
            <td>
            <a href="{{url('edit_pasien/'.$value->id)}}" class="btn btn-danger">edit</a>
            <a href= "{{url('delete_pasien/'.$value->id)}}"> delete </a>
                </td>
         <?php  }?> 
         

             
            </tr>
        <?php $nomer++; } ?>
    </tbody>
  </table>
</div>
@endsection