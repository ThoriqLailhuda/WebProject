<form action="{{url('save_tindakan')}}" method="post" required>
                                {{csrf_field()}}
                                Periksa Poli
                                <input type="text" name="id_periksa_poli" class="form-control" id="id_periksa_poli" readonly >
                                Tindakan
                                <select name="id_tindakan" class="form-control" id="tindakan1" onchange="biaya_tindakan('tindakan1','harga1')">
                                <option selected disabled> --  Pilih Tindakan --  </option>
                                    <?php foreach($tindakan as $input) { ?>
                                    <option value="{{$input->id}}"> {{$input->nama}} </option>
                                    <?php } ?>
                                </select>
                                <div id="tambah" ></div>
                                <button type="button" onclick="tambah_tindakan()"> tambah</button><br>
                                Harga
                                <input type="text" class="form-control" id="harga1"  name ="harga" required>
                                <div id="tambah2" ></div>
                               
                                Jumlah 
                                <input type="text" class="form-control" name="jml" id="jml"  required>
                               
                                <input type="SUBMIT" class="btn btn-primary">   

                                </form>
<script>
var jumlah_harga =0 ;
var nomer = 2 ;
const harga_tindakan = [];
<?php
 foreach  ($tindakan as $value) { ?>
harga_tindakan[<?php echo $value -> id;?>] = <?php echo $value -> harga;?>;
<?php } ?>

function biaya_tindakan(a,b){
jumlah_harga =0 ;
var id_tindakan = document.getElementById(a).value ;
document.getElementById(b).value= harga_tindakan[id_tindakan];
 for ( i = 1; i < nomer ; i++){
     var temp = Number(document.getElementById("harga"+i).value);
    jumlah_harga += Number (temp); 
 }
 document.getElementById('jml').value = jumlah_harga ;

}

function tambah_tindakan(){
var x = document.createElement("SELECT");
  x.setAttribute("id", "tindakan" +nomer);
  x.classList.add ("form-control");
  x.setAttribute("onclick", "biaya_tindakan('tindakan"+nomer+"','harga"+nomer+"')");
  document.getElementById('tambah').appendChild(x);

  <?php foreach($tindakan as $input) { ?>
        var z = document.createElement("option");
        z.setAttribute("value", "<?php echo $input-> id ; ?>");
        var t = document.createTextNode("<?php echo $input-> nama ; ?>");
        z.appendChild(t);
        document.getElementById("tindakan"+nomer).appendChild(z);
  <?php } ?>


  var y  = document.createElement("INPUT");
  y.setAttribute("id","harga" +nomer);
  y.classList.add ("form-control");
  document.getElementById("tambah2").appendChild(y);
  nomer += 1  ;
}

</script>