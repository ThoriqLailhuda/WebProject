<form action="{{url('simpan_kunjungan')}}" method="post" required>
                                {{csrf_field()}}
                                nomer  reservasi
                                <input type="text" class="form-control" name="id_reservasi" id="id_reservasi" required>
                                nama pasien
                                <input type="text" class="form-control"  id="nama_pasien" required>
                                <input type="hidden" class="form-control" name="id_pasien" id="id_pasien" required>
                                id Penyakit 
                                <input type="text" class="form-control" id="id_penyakit"  onchange="penyakitkunjungan()" required>
                                <input type="hidden" id="penyakit" name="id_penyakit">
                                 <div id="hasil"> </div>
                                Tekanan Darah 
                                <input type="number" class="form-control" name="tekanan_darah" required>
                                Denyut Nadi
                                <input type="number" class="form-control" name="denyut_nadi" required>
                                Usia Bulan 
                                <input type="text" class="form-control" name="usia_bulan" id="usia_bulan" required>
                                Usia hari 
                                <input type="text" class="form-control" name="usia_hari" id="usia_hari" required>
                                Create by 
                                <input type="text" class="form-control" name="created_by" required>
                                Create add
                                <input type="text" class="form-control" name="created_at" >
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited Add
                                <input type="text" class="form-control" name="edited_at" >

                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   

                                </form>
