@extends('template.sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Silakan lengkapi data diri Anda') }}</div>
                <?php
                    if (count($pasien) < 1) { ?>
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
                                <input type="text" class="form-control" name="nama" required><br>
                                No RM
                                <input type="number" class="form-control" name="no_rm" required><br>
                                NIK
                                <input type="number" class="form-control" name="nik" required><br>
                                Alamat
                                <input type="text" class="form-control" name="alamat" required><br>
                                Tempat Lahir
                                <input type="text" class="form-control" name="tempat_lahir" required><br>
                                Tanggal lahir
                                <input type="date" class="form-control" name="tgl_lahir" required><br>
                                RT
                                <input type="number" class="form-control" name="rt" required><br>
                                RW
                                <input type="number" class="form-control" name="rw" required><br>
                                Provinsi
                                <select class="form-control" name="id_provinsi" id="id_provinsi" onchange="ambilkabupaten()">

                                    <?php foreach ($provinsi->provinsi as $value) { ?>
                                        <option value="{{$value-> id}}">{{$value->nama}} </option>
                                    <?php } ?>
                                    
                                </select><br>
                                Kabupaten
                                <select class="form-control" name="id_kabupaten" id="id_kabupaten" onchange="ambilkecamatan()">
                                </select><br>
                                Kecamatan
                                <select class="form-control" name="id_kecamatan" id="id_kecamatan" onchange="ambilkelurahan()">
                                </select><br>
                                Kelurahan
                                <select class="form-control" name="id_kelurahan" id="id_kelurahan">
                                </select>

                                <br>
                                <input type="SUBMIT" class="btn btn-primary">

                            </form>
                        </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

    <script>
        function ambilkabupaten() {
            var Idprovinsi = document.getElementById("id_provinsi").value;
            $.ajax({
                url: "{{url('get_kabupaten')}}/" + Idprovinsi,
                type: 'get',
                dataType: 'json',
                async: false,
                success: function(response) {

                    document.getElementById('id_kabupaten').innerHTML = "";
                    var y = document.getElementById('id_kabupaten');
                    var options = document.createElement("option");
                    options.text = "Pilih Kabupaten";
                    y.add(options);
                    //console.log(response['kota_kabupaten']);
                    for (var i = 0; i < response['kota_kabupaten'].length; i++) {
                        //console.log(response['kota_kabupaten'][i]);
                        var x = document.getElementById('id_kabupaten');
                        var option = document.createElement("option");
                        option.text = response['kota_kabupaten'][i]['nama'];
                        option.value = response['kota_kabupaten'][i]['id'];
                        x.add(option);
                    }
                }
            });
        }

        function ambilkecamatan() {
            var idkabupaten = document.getElementById("id_kabupaten").value;
            $.ajax({
                url: "{{url('get_kecamatan')}}/" + idkabupaten,
                type: 'get',
                dataType: 'json',
                async: false,
                success: function(response) {
                    document.getElementById('id_kecamatan').innerHTML = "";
                    var y = document.getElementById('id_kecamatan');
                    var options = document.createElement("option");
                    options.text = "Pilih Kecamatan";
                    y.add(options);
                    //console.log(response['kota_kabupaten']);
                    for (var i = 0; i < response['kecamatan'].length; i++) {
                        //console.log(response['kota_kabupaten'][i]);
                        var x = document.getElementById('id_kecamatan');
                        var option = document.createElement("option");
                        option.text = response['kecamatan'][i]['nama'];
                        option.value = response['kecamatan'][i]['id'];
                        x.add(option);
                    }
                }
            });
        }

            function ambilkelurahan() {
            var idkecamatan= document.getElementById("id_kecamatan").value;
            $.ajax({
                url: "{{url('get_kelurahan')}}/" + idkecamatan,
                type: 'get',
                dataType: 'json',
                async: false,
                success: function(response) {
                    document.getElementById('id_kelurahan').innerHTML = "";
                    var y = document.getElementById('id_kelurahan');
                    var options = document.createElement("option");
                    options.text = "Pilih Kelurahan";
                    y.add(options);
                    console.log(response['kelurahan']);
                    for (var i = 0; i < response['kelurahan'].length; i++) {
                        //console.log(response['kota_kabupaten'][i]);
                        var x = document.getElementById('id_kelurahan');
                        var option = document.createElement("option");
                        option.text = response['kelurahan'][i]['nama'];
                        option.value = response['kelurahan'][i]['id'];
                        x.add(option);
                    }
                }
            });
        }
    </script>

@endsection