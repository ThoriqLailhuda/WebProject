@extends('template.sidebar')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang...') }}</div>
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
                Nama
                    <input type="text" class="form-control" required>
                    <input type="hidden" class="form-control" name="id_pasien" required>
                Tanggal Pemesanan
                    <input type="date" class="form-control" name="tanggal_rencana_datang"required>
               
                NO HP
                    <input type="number" class="form-control" name="int_telp"required>

                <!-- POLI Bagian
                    <input type="number" class="form-control" name="id_poli_bagian"required>
                Dokter
                    <input type="text" class="form-control" name="id_dokter"required>
                Status Pasien
                    <input type="text" class="form-control" name="Status_pasien"required>
                Creat By
                    <input type="text" class="form-control" name="created_by"required>
                edited by
                    <input type="text" class="form-control" name="edited_by"required> -->
                <br>
                <input type="SUBMIT" class="btn btn-primary">
                
                    </form>                 
            </div>
        </div>
    </div>
</div>

@endsection