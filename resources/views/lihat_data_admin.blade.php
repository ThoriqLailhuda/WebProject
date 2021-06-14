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
  <h2>Data Pasien</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="text-align:center">Nama</th>
        <th style="text-align:center">No RM</th>
        <th style="text-align:center">NIK</th>
        <th style="text-align:center">Alamat</th>
        <th style="text-align:center">Tempat Lahir</th>
        <th style="text-align:center">Alamat</th>
        <th style="text-align:center">Kabupaten</th>
        <th style="text-align:center">Kecamatan</th>
        <th style="text-align:center">Kelurahan</th>
        <th style="text-align:center">RT</th>
        <th style="text-align:center">RW</th>
        <th style="text-align:center">Tindakan</th>

      </tr>
    </thead>
    <tbody>
        <?php foreach($pasien as $value){ ?>
            <tr>
            <td style="text-align:center">{{$value->nama}}</td>
            <td style="text-align:center">{{$value->no_rm}}</td>
            <td style="text-align:center">{{$value->nik}}</td>
            <td style="text-align:center">{{$value->alamat}}</td>
            <td style="text-align:center">{{$value->tempat_lahir}}</td>
            <td style="text-align:center">{{$value->nama_provinsi}}</td>
            <td style="text-align:center">{{$value->nama_kabupaten}}</td>
            <td style="text-align:center">{{$value->nama_kecamatan}}</td>
            <td style="text-align:center">{{$value->nama_kelurahan}}</td>
            <td style="text-align:center">{{$value->rt}}</td>
            <td style="text-align:center">{{$value->rw}}</td>
            <td style="text-align:center">    
                <a href= "{{url('delete_pasien/'.$value->id)}}"> delete </a>
                <a href="{{url('edit_pasien/'.$value->id)}}" class="btn btn-danger">edit</a>
            </td>

             
            </tr>
        <?php  } ?>
    </tbody>
  </table>
</div>


@endsection