@extends('template.sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang...') }}</div>

                <?php if(Auth::user()->level == 0){echo "Pasien"; ?>
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
                <form action="{{url('simpan_pasien')}}" method="post" required>
                {{csrf_field()}}
                Nama 
                    <input type="text" class="form-control" name="nama" required>
                No_Rm
                    <input type="number" class="form-control" name="no_rm"required>
                NIK
                    <input type="number" class="form-control" name="nik"required>
                Alamat
                    <input type="text" class="form-control" name="alamat"required>
                Tempat Lahir
                    <input type="text" class="form-control" name="tempat_lahir"required>
                Tanggal lahir
                    <input type="date" class="form-control" name="tgl_lahir"required>
                RT
                    <input type="number" class="form-control" name="rt"required>
                RW
                    <input type="number" class="form-control" name="rw"required>
                <br>
                <input type="SUBMIT" class="btn btn-primary">
                
                    </form>                  
                </div>
                <?php } else{
                    echo "admin";
                }?>
                
            </div>
        </div>
    </div>
</div>
@endsection
