<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function home_admin()
    {
        return view('home_admin');
    }

    public function simpan_pasien(Request $post)
    {
        $data = $post->except('_token');
        $data['id_user'] = Auth::user()->id;
        $q = DB::table('pasien')->insert($data);
        if ($q) {
            return redirect('/daftarpasien')->with('success', "Berhasil!");
        }
    }

    public function tambahdata_admin()
    {
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/provinsi");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        $data['provinsi'] = json_decode($output);
        //dd($data);

        return view('tambahdata_admin', $data);
    }


    public function menu()
    {
        return view('menu');
    }

    public function kunjungan()
    {
        return view('kunjungan');
    }

    public function dokter()
    {
        return view('dokter');
    }

    public function perawat()
    {
        return view('perawat');
    }

    public function ref_poli_bagian()
    {
        return view('ref_poli_bagian');
    }

    public function kunjungan_poli()
    {
        return view('kunjungan_poli');
    }

    public function tindakan()
    {
        return view('tindakan');
    }

    public function bhp()
    {
        return view('bhp');
    }

    public function obat()
    {
        return view('obat');
    }

    public function ref_tindakan()
    {
        return view('ref_tindakan');
    }

    public function ref_obat()
    {
        return view('ref_obat');
    }

    public function ref_penyakit_icd()
    {
        return view('ref_penyakit_icd');
    }

    public function ref_bhp()
    {
        return view('ref_bhp');
    }


    public function searchpenyakit($id)
    {
        $user = DB::table('ref_penyakit_icd')
                ->where('indonesian_name', 'like', '%'.$id.'%')
                ->get();  
        echo json_encode($user) ;    

    } 

    public function antrian()
    {
        $data["reservasi"] = DB::table('pasien')->select("*")->get();
        $data["reservasi_polibagian"] = DB::table('ref_poli_bagian')->select("*")->get();
        $data["reservasi_dokter"] = DB::table('dokter')->select("*")->get();
        $data["penyakit"] = DB::table('ref_penyakit_icd')->select("*")->get();
        $user = Auth::user(); 
        if ($user->hasRole('admin')) {
            $data["reservasi"] = DB::table('reservasi')->join('pasien', 'reservasi.id_pasien','pasien.id')
            ->leftJoin('kunjungan', 'kunjungan.id_reservasi','reservasi.id')
            ->select("reservasi.*","pasien.nama","kunjungan.id_penyakit")
            ->get();
        }
        else{
            $data["reservasi"] = DB::table('reservasi')->join('pasien', 'reservasi.id_pasien', 'pasien.id')
            ->leftJoin('kunjungan', 'kunjungan.id_reservasi','reservasi.id')
            ->select("reservasi.*","pasien.nama","kunjungan.id_penyakit")
            ->get(); 
        }
        return view('antrian', $data);
    }
        public function reservasiadmin ()
    {
        $data["reservasi"] = DB::table('pasien')->select("*")->get();
        $data["reservasi_polibagian"] = DB::table('ref_poli_bagian')->select("*")->get();
        $data["reservasi_dokter"] = DB::table('dokter')->select("*")->get();
        return view('reservasi_admin',$data);
    }

    public function daftar_kunjungan (){
        $data["kunjungan"] = DB::table('kunjungan')
            ->join('reservasi','kunjungan.id_reservasi','reservasi.id')
            ->join('pasien', 'reservasi.id_pasien','pasien.id')
            ->join('ref_penyakit_icd', 'kunjungan.id_penyakit','ref_penyakit_icd.id')
            ->join('ref_poli_bagian', 'reservasi.id_poli_bagian','ref_poli_bagian.id')
            ->join('dokter', 'reservasi.id_dokter','dokter.id')
            ->where('kunjungan.status','<>',1)
            ->select('kunjungan.*','pasien.*','reservasi.*','ref_penyakit_icd.*','kunjungan.id as id_kunjungan',
            'ref_poli_bagian.nama as nama_penyakitpoli','ref_poli_bagian.id as id_poli','ref_poli_bagian.harga_pendaftaran',
            'dokter.nama as nama_dokter', 'dokter.id as id_dokter','ref_penyakit_icd.id as id_penyakit')
            ->get();
        $data['kunjungan_poli'] = DB::table('kunjungan') ->select("*")->get();
        $data['perawat'] = DB::table('perawat') ->select("*")->get();
        return view('daftar_kunjungan',$data);
    }
    public function daftar_kunjunganpoli(){
        $data["kunjungan_poli"] = DB::table('kunjungan_poli')
        ->join('ref_poli_bagian', 'kunjungan_poli.id_poli_bagian','ref_poli_bagian.id')
        ->join('dokter', 'kunjungan_poli.id_dokter_pemeriksa','dokter.id')
        ->join('perawat', 'kunjungan_poli.id_perawat_pemeriksa','perawat.id')
        ->leftJoin('tindakan','kunjungan_poli.id_periksa','tindakan.id_periksa_poli')
        ->join('ref_penyakit_icd', 'kunjungan_poli.id_penyakit','ref_penyakit_icd.id')
        ->join('ref_tindakan', 'kunjungan_poli.id_periksa','ref_tindakan.id')
        ->select("*")
        ->get();
        $data['tindakan'] = DB::table('ref_tindakan') ->select("*")->get();
       
      return view('daftar_kunjunganpoli',$data );  
    }
    public function daftar_tindakan()
    {   
        
        $data['tindakan'] = DB::table('tindakan')
         ->leftJoin('obat','obat.id_periksa_poli','tindakan.id_periksa_poli')
         ->select("*")->get();
        $data['ref_obat'] = DB::table('ref_obat') ->select("*")->get();
        return view('daftar_tindakan',$data );  
    }

    
    public function reservasipasien()
    {
        $data["reservasi"] = DB::table('pasien')->select("*")->where('id_user', Auth::user()->id)->get();
        return view('reservasi', $data);
    }


    public function simpan_reservasi(Request $post)
    {
        $data = $post->except('_token');
        $q = DB::table('reservasi')->insert($data);
        if ($q) {
            return redirect('/antrian')->with('success', "Berhasil!");
        }
    }

    public function save_obat (Request $post)
    {

        $data = $post->except('_token');
        $q = DB::table('obat')->insert($data);
        if ($q) {
            return redirect('/daftar_tindakan')->with('success', "Berhasil!");
        }
    }

    public function save_tindakan(Request $post)
    {
        $data = $post->except('_token');
        $q = DB::table('tindakan')->insert($data);
        if ($q) {
            return redirect('/daftar_kunjunganpoli')->with('success', "Berhasil!");
        }
    }

    public function simpan_kunjungan_poli(Request $post)
    {
        $data = $post->except('_token','id_reservasi'); 
        $data['created_by']= Auth::user()->name;
        $data['edited_by']= Auth::user()->name;
               $q = DB::table('kunjungan_poli')->insert($data);
        if ($q) {
            $a['status']=1;
            DB::table('kunjungan')->where('id_reservasi',$post->id_reservasi)->update($a);
            return redirect('/daftar_kunjungan')->with('success', "Berhasil!");
        }
    }

    public function simpan_reservasi_admin(Request $post)
    {
        $data = $post->except('_token');
        $q= DB::table('reservasi')->where('id',$data['id'])->update($data);
        if ($q) {
            return redirect('/antrian')->with('success', "Berhasil!");
        }
    }

    public function simpan_kunjungan(Request $post)
    {
        $data = $post->except('_token');
        //dd($data);
        $q= DB::table('kunjungan')->insert($data);
        if ($q) {
            return redirect('antrian');
        }
    }

    public function simpan_kunjunganpoli(Request $post)
    {
        $data = $post->except('_token');
        //dd($data);
        $q= DB::table('form_poli')->insert($data);
        if ($q) {
            return redirect('');
        }
    }
    


    public function reservasi()
    {
        $data["antrian"] = DB::table('reservasi')->select("*")->where('id_pasien', Auth::user()->id)->get();
    }

    public function daftarpasien()
    {
        if (Auth::user()->hasRole('admin')) {
            $data["pasien"] = DB::table('pasien as a')
                ->join('provinces as b', 'a.id_provinsi', 'b.id')
                ->join('regencies as c', 'a.id_kabupaten', 'c.id')
                ->join('districts as d', 'a.id_kecamatan', 'd.id')
                ->join('villages as e', 'a.id_kelurahan', 'e.id')
                ->select("a.*", "b.name as nama_provinsi", "c.name as nama_kabupaten", "d.name as nama_kecamatan", "e.name as nama_kelurahan")->get();
            return view('lihat_data_admin', $data);
        } else {
            $data["daftarpasien"] = DB::table('pasien as a')
                ->join('provinces as b', 'a.id_provinsi', 'b.id')
                ->join('regencies as c', 'a.id_kabupaten', 'c.id')
                ->join('districts as d', 'a.id_kecamatan', 'd.id')
                ->join('villages as e', 'a.id_kelurahan', 'e.id')
                ->select("a.*", "b.name as nama_provinsi", "c.name as nama_kabupaten", "d.name as nama_kecamatan", "e.name as nama_kelurahan")
                ->where('a.id_user', Auth::user()->id)->get();
            return view('lihat_data', $data);
        }
    }

    public function editpasien($id)
    {
        $data["daftarpasien"] = DB::table('pasien')->select("*")->where('id', $id)->get();
        $data['provinsi']=DB::table('provinces')->select("*")->get();
        $data['kabupaten']=DB::table('regencies')->select("*")-> where('province_id',$data['daftarpasien'][0]->id_provinsi)->get();
        $data['kecamatan']=DB::table('districts')->select("*")-> where('regency_id',$data['daftarpasien'][0]->id_kabupaten)->get();
        $data['kelurahan']=DB::table('villages')->select("*")-> where('district_id',$data['daftarpasien'][0]->id_kecamatan)->get();
        return view('edit_data', $data);
    }
         
    public function update_pasien(Request $post)
    {
        $data = $post->except('_token');

        $q = DB::table('pasien')->where('id', $data['id'])->update($data);
        if ($q) {
            return redirect('/daftarpasien')->with('success', "Berhasil!");
        }
    }

    public function deletepasien($id)
    {
        $data = DB::table('pasien')->where('id', $id)->delete();
        if ($data) {
            return redirect()->back()->with('success', "Berhasil!");
        }
    }

    public function getkabupaten($id)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
    }

    public function getkecamatan($id)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=" . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $output contains the output string
        $output = curl_exec($ch);
        // close curl resource to free up system resources
        curl_close($ch);
        echo $output;
    }
    public function getkelurahan($id)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=" . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
    }
}
