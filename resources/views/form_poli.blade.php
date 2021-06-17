<form action="{{url('simpan_kunjunganpoli')}}" method="post" required>
                                {{csrf_field()}}
                                Jenis Pemeriksaan 
                                <select name="id_periksa" class="form-control" id="id_periksa" onchange="biaya()" >
                                <option selected disabled> --  Pilih Tindakan --  </option>
                                    <?php foreach($kunjungan_poli as $input) { ?>
                                    <option value="{{$input->id}}"> {{$input->nama}} </option>
                                    <?php } ?>
                                </select>
                                Biaya Pendaftaran
                                <input type="text" class="form-control" name="biaya_pendaftaran" id="biaya_pendaftaran" >
                                Nama Poli
                                <input type="text" class="form-control" name="nama_poli" required>
                                Dokter Pemeriksa 
                                <input type="number" class="form-control" name="tekanan_darah" required>
                                Nama Perawat
                                <input type="number" class="form-control" name="denyut_nadi" required>
                                penyakit
                                <input type="text" class="form-control" name="usia_bulan" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   

                                </form>
<script>
const val_harga = [];
<?php foreach($kunjungan_poli as $input){ ?>
    val_harga[{{$input->id}}] = {{$input->harga}};
<?php } ?>
function biaya(){
 var harga =  document.getElementById("id_periksa").value ;
 document.getElementById("biaya_pendaftaran").value = val_harga[harga] ;               
}
</script>
