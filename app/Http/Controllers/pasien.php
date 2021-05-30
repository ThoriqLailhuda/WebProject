<?php

namespace App\Http\Controllers;

use App\Models\pasiens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pasien extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   pasiens::create($request->all());
    pasiens::create([
            'nama' => $request->nama,
            'no_rm' => $request->no_rm,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'id_kelurahan' => $request->id_kelurahan,
            'id_kecamatan' => $request->id_kecamatan,
            'id_kabupaten' => $request->id_kabupaten,
            'id_provinsi' => $request->id_provinsi,
            'id_user' => Auth::user()->id
            
        ]);
      return redirect('/daftarpasien')->with('success',"Berhasil!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasiens  $pasiens
     * @return \Illuminate\Http\Response
     */
    public function show(pasiens $pasiens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pasiens  $pasiens
     * @return \Illuminate\Http\Response
     */
    public function edit(pasiens $pasiens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pasiens  $pasiens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pasiens $pasiens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasiens  $pasiens
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasiens $pasiens)
    {
        //
    }
}
