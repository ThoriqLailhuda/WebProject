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
  <h2>Data Diri</h2>            
  <table class="table table-bordered">
    <!-- <thead> -->
      <tr>
        <td>Nama</td>
      </tr>
      <tr>
        <td>No RM</td>
      </tr>
      <tr>
        <td>NIK</td>
      </tr>
      <tr>
        <td>Alamat</td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
      </tr>
      <tr>
        <td>Provinsi</td>
      </tr>
      <tr>
        <td>Kabupaten</td>
      </tr>
      <tr>
        <td>Kecamatan</td>
      </tr>
      <tr>
        <td>Kelurahan</td>
      </tr>
      <tr>
        <td>RT</td>
      </tr>
      <tr>
        <td>RW</td>
      </tr>       

      </tr>
    <!-- </thead> -->
    
    <p>
      <!-- <tr> -->
        <!-- Nama<br>
        No RM<br>
        NIK<br>
        Alamat<br>
        Tempat Lahir<br>
        Provinsi<br>
        Kabupaten<br>
        Kecamatan<br>
        Kelurahan<br>
        RT<br>
        RW<br> -->
       <!-- </tr> -->
    </p>
    <tbody>
        <?php foreach($daftarpasien as $value){ ?>
            <tr>
            <td>{{$value->nama}}</td>
            <td>{{$value->no_rm}}</td>
            <td>{{$value->nik}}</td>
            <td>{{$value->alamat}}</td>
            <td>{{$value->tempat_lahir}}</td>
            <td>{{$value->nama_provinsi}}</td>
            <td>{{$value->nama_kabupaten}}</td>
            <td>{{$value->nama_kecamatan}}</td>
            <td>{{$value->nama_kelurahan}}</td>
            <td>{{$value->rt}}</td>
            <td>{{$value->rw}}</td>
            
          

             
            </tr>
        <?php  } ?>
    </tbody>
  </table>
</div>


@endsection