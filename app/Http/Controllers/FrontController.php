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

    public function simpan_pasien(Request $post)
    {
       $data = $post->except('_token');
       $data['id_user'] = Auth::user()->id;
       $q = DB::table('pasien')->insert($data);
       if($q){
           return redirect('/daftarpasien')->with('success',"Berhasil!");
       }
    }

    public function menu()
    {
     return view('menu');
       
    }

    public function kunjungan()
    {   
     return view('kunjungan');   
    }

    public function perawat()
    {
     return view('perawat');
        
    }

    public function kunjungan_poli()
    {
     return view('kunjungan_poli');    
    }

    public function antrian()
    {
    $data["reservasi"] = DB::table('reservasi')->join('pasien','reservasi.id_pasien','pasien.id')->select("*")->get();  
        return view('antrian',$data); 
     
    }


    public function reservasipasien()
    {
    $data["reservasi"] = DB::table('pasien')->select("*")->where('id_user',Auth::user()->id)->get();  
    return view('reservasi',$data);
       
    }
    public function simpan_reservasi(Request $post)
    {
       $data = $post->except('_token');
       $q = DB::table('reservasi')->insert($data);
       if($q){
           return redirect('/antrian')->with('success',"Berhasil!");
       }
    }

    
    
    public function reservasi()
    {
    $data["antrian"] = DB::table('reservasi')->select("*")->where('id_pasien',Auth::user()->id)->get();

    }

    public function daftarpasien()
    {
    $data["daftarpasien"] = DB::table('pasien')->select("*")->where('id_user',Auth::user()->id)->get();
    //dd($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/provinsi" );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $allprov = json_decode($output);
    foreach ($allprov->provinsi as $value){
        $data['prov'][$value->id] = $value->nama;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=". $data["daftarpasien"][0]->id_provinsi );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $allkab = json_decode($output);
    // dd($output);
    foreach ($allkab->kota_kabupaten as $value){
        $data['kab'][$value->id] = $value->nama;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=". $data["daftarpasien"][0]->id_kabupaten );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $allkec = json_decode($output);
    foreach ($allkec->kecamatan as $value){
        $data['kec'][$value->id] = $value->nama;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=". $data["daftarpasien"][0]->id_kecamatan );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $allkel = json_decode($output);
    foreach ($allkel->kelurahan as $value){
        $data['kel'][$value->id] = $value->nama;
    }

    return view('lihat_data',$data);
    }

    public function editpasien($id)
    {
    $data["daftarpasien"] = DB::table('pasien')->select("*")->where('id',$id)->get();
    return view('edit_data',$data);
    }

    public function update_pasien(Request $post)
    {
       $data = $post->except('_token');
       
       $q = DB::table('pasien') ->where('id', $data['id'])->update($data);
       if($q){
           return redirect('/daftarpasien')->with('success',"Berhasil!");
       }
    }

    public function deletepasien($id)
    {
    $data= DB::table('pasien')->where('id',$id)->delete();
    if($data){
        return redirect()->back()->with('success',"Berhasil!");
    }
    }

    public function getkabupaten($id)
    {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=".$id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    echo $output;
    }

    public function getkecamatan($id)
    {

        $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=".$id);
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
    curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=".$id);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    echo $output;
    }
}