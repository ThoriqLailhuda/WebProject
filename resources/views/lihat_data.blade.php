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
        <th>Nama</th>
        <th>no_rm</th>
        <th>NIK</th>
        <th>alamat</th>
        <th>Tempat Lahir</th>
        <th>Provinsi</th>
        <th>Kabupaten</th>
        <th>Kecamatan</th>
        <th>Kelurahan</th>
        <th>RT</th>
        <th>RW</th>
        <!-- <th>tindakan</th> -->

      </tr>
    </thead>
    <tbody>
        <?php foreach($daftarpasien as $value){ ?>
            <tr>
            <td>{{$value->nama}}</td>
            <td>{{$value->no_rm}}</td>
            <td>{{$value->nik}}</td>
            <td>{{$value->alamat}}</td>
            <td>{{$value->tempat_lahir}}</td>
            <td>{{$prov[$value->id_provinsi]}}</td>
            <td>{{$kab[$value->id_kabupaten]}}</td>
            <td>{{$kec[$value->id_kecamatan]}}</td>
            <td>{{$kel[$value->id_kelurahan]}}</td>
            <td>{{$value->rt}}</td>
            <td>{{$value->rw}}</td>
            
          <?php  if (Auth::user()->level==1){ ?>
                <a href= "{{url('delete_pasien/'.$value->id)}}"> delete </a>
                <td><a href="{{url('edit_pasien/'.$value->id)}}" class="btn btn-danger">edit</a>
         <?php  }?> 
          </td>

             
            </tr>
        <?php  } ?>
    </tbody>
  </table>
</div>


@endsection