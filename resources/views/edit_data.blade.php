@extends('template.sidebar')

@section('content')
<div class="container">
<form action="{{url('update_pasien')}}" method="post" required>
                {{csrf_field()}}
               
                Nama 
                    <input type="text" class="form-control" name="nama" value="{{$daftarpasien[0]->nama}}" required>
                No RM
                    <input type="number" class="form-control" name="no_rm" value="{{$daftarpasien[0]->no_rm}}"required>
                NIK
                    <input type="number" class="form-control" name="nik" value="{{$daftarpasien[0]->nik}}"required>
                Alamat
                    <input type="text" class="form-control" name="alamat" value="{{$daftarpasien[0]->alamat}}"required>
                Tempat Lahir
                    <input type="text" class="form-control" name="tempat_lahir" value="{{$daftarpasien[0]->tempat_lahir}}"required>
                Tanggal Lahir
                    <input type="date" class="form-control" name="tgl_lahir" value="{{$daftarpasien[0]->tgl_lahir}}"required>
                RT
                    <input type="number" class="form-control" name="rt" value="{{$daftarpasien[0]->rt}}"required>
                RW
                     <input type="number" class="form-control" name="rw" value="{{$daftarpasien[0]->rw}}"required>
                Provinsi
                <select name="id_provinsi" class="form-control"  id="id_provinsi" onchange="ambilkabupaten()"> 
                <?php foreach($provinsi as $prov) { ?>
                <option value="{{$prov->id}}"
                    <?php if ($prov->id == $daftarpasien[0]->id_provinsi ){
                        echo "selected";
                    }?>
                >{{$prov->name}} </option>
               <?php } ?>
                </select>

                Kabupaten 
                <select name="id_kabupaten" class="form-control"  id="id_kabupaten" onchange="ambilkecamatan()"> 
                <?php foreach($kabupaten as $kab) { ?>
                <option value="{{$kab->id}}"
                    <?php if ($kab->id == $daftarpasien[0]->id_kabupaten ){
                        echo "selected";
                    }?>
                >{{$kab->name}} </option>

               <?php } ?>
                </select>
                Kecamatan 
                <select name="id_kecamatan" class="form-control"  id="id_kecamatan" onchange="ambilkelurahan()"> 
                <?php foreach($kecamatan as $kec) { ?>
                <option value="{{$kec->id}}"
                    <?php if ($kec->id == $daftarpasien[0]->id_kecamatan ){
                        echo "selected";
                    }?>
                >{{$kec->name}} </option>

               <?php } ?>
                </select>
                Kelurahan 
                <select name="id_kelurahan" class="form-control" id="id_kelurahan"> 
                <?php foreach($kelurahan as $kel) { ?>
                <option value="{{$kel->id}}"
                    <?php if ($kel->id == $daftarpasien[0]->id_kelurahan ){
                        echo "selected";
                    }?>
                >{{$kel->name}} </option>

               <?php } ?>
                </select>


                    <input type="hidden" class="form-control" name="id" value="{{$daftarpasien[0]->id}}"required>
                <br>
                <input type="SUBMIT" class="btn btn-primary">
                
                </form>
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