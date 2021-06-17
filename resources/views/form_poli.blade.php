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
                                <input type="text" class="form-control" id="nama_poli"  required>
                                <input type="hidden" class="form-control" name="id_poli_bagian"  id="id_poli"  required>
                                Dokter Pemeriksa 
                                <input type="text" class="form-control" id="nama_dokter"  required>
                                <input type="hidden" class="form-control" name="id_dokter_pemeriksa" id="id_dokter"required>
                                Nama Perawat
                                <select name="id_perawat_pemeriksa" class="form-control" id="id_perawat" >
                                <option selected disabled> --  Nama Perawat --  </option>
                                    <?php foreach($perawat as $input) { ?>
                                    <option value="{{$input->id}}"> {{$input->nama}} </option>
                                    <?php } ?>
                                </select>
                                penyakit
                                <input type="text" class="form-control" id='nama_penyakit' required>
                                <input type="hidden" class="form-control" name="id_penyakit" id='id_penyakit' required>
                                <input type='hidden' name='id_reservasi' id="id_reservasi">
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
