@extends('template.sidebar')

@section('content')
<div class="container">
<form action="{{url('update_pasien')}}" method="post" required>
                {{csrf_field()}}
                Nama 
                    <input type="text" class="form-control" name="nama" value="{{$daftarpasien[0]->nama}}" required>
                No_Rm
                    <input type="number" class="form-control" name="no_rm" value="{{$daftarpasien[0]->no_rm}}"required>
                NIK
                    <input type="number" class="form-control" name="nik" value="{{$daftarpasien[0]->nik}}"required>
                Alamat
                    <input type="text" class="form-control" name="alamat" value="{{$daftarpasien[0]->alamat}}"required>
                Tempat Lahir
                    <input type="text" class="form-control" name="tempat_lahir" value="{{$daftarpasien[0]->tempat_lahir}}"required>
                Tanggal lahir
                    <input type="date" class="form-control" name="tgl_lahir" value="{{$daftarpasien[0]->tgl_lahir}}"required>
                RT
                    <input type="number" class="form-control" name="rt" value="{{$daftarpasien[0]->rt}}"required>
                RW
                     <input type="number" class="form-control" name="rw" value="{{$daftarpasien[0]->rw}}"required>
                Provinsi
                    <input type="number" class="form-control" name="rw" value="{{$daftarpasien[0]->prov}"required>
                Kabupaten 
                    <input type="number" class="form-control" name="rw" value="{{$daftarpasien[0]->kab}}"required>
                Kecamatan 
                    <input type="number" class="form-control" name="rw" value="{{$daftarpasien[0]->kec}}"required>
                Kelurahan 
                    <input type="number" class="form-control" name="rw" value="{{$daftarpasien[0]->kel}}"required>

                    <input type="hidden" class="form-control" name="id" value="{{$daftarpasien[0]->id}}"required>
                <br>
                <input type="SUBMIT" class="btn btn-primary">
                
                </form>
    </div>   

@endsection