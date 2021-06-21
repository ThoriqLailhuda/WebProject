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
        <th style="text-align:center" width="200px">Penyakit</th>
        <th style="text-align:center" width="200px">Tekanan Darah </th>
        <th style="text-align:center" width="200px">Denyut Nadi</th>
        <th style="text-align:center" width="200px">Usia Bulan</th>
        <th style="text-align:center" width="200px">Usia Hari</th>
        <th style="text-align:center" width="200px">Cetak Pembayaran</th>
        
      </tr>
    </thead>
    <tbody>
        <?php $nomer=1; foreach($kunjungan as $value)  {?>
            <tr>
            <td style="text-align:center">{{$nomer}}</td>
            <td style="text-align:center">{{$value->nama}}</td>
            <td style="text-align:center">{{$value->indonesian_name}}</td>
            <td style="text-align:center">{{$value->tekanan_darah}}</td>
            <td style="text-align:center">{{$value->denyut_nadi}}</td>
            <td style="text-align:center">{{$value->usia_bulan}}</td>
            <td style="text-align:center">{{$value->usia_hari}}</td>
            <td style="text-align:center">
            <?php if($value->bayar == "terbayar"){ ?>
                Sudah Dibayarkan
            <?php }else{ ?>
                <a href="{{url('cetak_pembayaran')}}/{{$value->id_pembayaran}}">Cetak Pembayaran</a>   
            <?php } ?>   
            </td>
            </tr>
        <?php $nomer++; } ?>

</script>



@endsection