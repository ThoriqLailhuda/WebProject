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
       $data['id_kelurahan'] = 1;
       $data['id_kecamatan'] = 1;
       $data['id_kabupaten'] = 1;
       $data['id_provinsi'] = 1; 
       $data['id_user'] = Auth::user()->id;
       $q = DB::table('pasien')->insert($data);
       if($q){
           return redirect('/menu')->with('success',"Berhasil!");
       }
    }

    public function menu()
    {
     return view('menu');
       
    }

    
    public function reservasi()
    {
    $data["antrian"] = DB::table('reservasi')->select("*")->where('id_pasien',Auth::user()->id)->get();

    }

    public function daftarpasien()
    {
    $data["daftarpasien"] = DB::table('pasien')->select("*")->where('id_user',Auth::user()->id)->get();
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
}


