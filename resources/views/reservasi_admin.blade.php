@extends('template.sidebar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Reservasi') }}</div>
                <p id="demo"></p>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                    <script>
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                      )
                    </script>
                    @endif
                <form action="{{url('simpan_reservasi')}}" method="post" required>
                {{csrf_field()}}
                Nama Pasien
                <select name="id_pasien" class="form-control"  >
                <?php foreach($reservasi as $adminreservasi) { ?>
                <option value="{{$adminreservasi->id}}">{{$adminreservasi->nama}} </option>

               <?php } ?>
                </select><br>
                Tanggal Pemesanan
                    <input type="date" class="form-control" name="tanggal_rencana_datang"required><br>
                No HP
                    <input type="number" class="form-control" name="int_telp"required><br>

                Poli Bagian
                <select name="id_poli_bagian" class="form-control" > 
                <?php foreach($reservasi_polibagian as $reservasipoli) { ?>
                <option value="{{$reservasipoli->id}}"> {{$reservasipoli->nama}} </option>
                <?php } ?>
                </select><br>
                Dokter
                <select name="id_dokter" class="form-control" > 
                <?php foreach($reservasi_dokter as $reservasidokter) { ?>
                <option value="{{$reservasidokter->id}}"> {{$reservasidokter->nama}} </option>
                <?php } ?>
                </select><br>
                Status Pasien
                    <input type="text" class="form-control" name="Status_pasien"required><br>
                Created By  
                    <input type="text" class="form-control" name="created_by"required><br>
                Edited by
                    <input type="text" class="form-control" name="edited_by"required><br>
                <br>
                <input type="SUBMIT" class="btn btn-primary">
                
                    </form>                 
            </div>
        </div>
    </div>
</div>

@endsection