<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['pasien']=DB::table("pasien")->where ('id_user',Auth::user()->id)->select('*')-> get() ;
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://dev.farizdotid.com/api/daerahindonesia/provinsi");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        $data['provinsi']=json_decode($output);
        //dd($data);
        return view('home', $data);
    }
}