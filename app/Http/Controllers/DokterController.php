<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtDokter = Dokter::all();
        return view('dokter', compact('dtDokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_dokter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Dokter::create([
            'id' => $request -> id,
            'nama' => $request -> nama,
            'id_poli_bagian' => $request -> id_poli_bagian,
            'no_telp' => $request -> no_telp,
            'harga' => $request -> harga,
            'created_by' => $request -> created_by,
            'created_at' => $request -> created_at,
            'edited_by' => $request -> edited_by,
            'edited_at' => $request -> edited_at,
        ]);
        return redirect('dokter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dktr = Dokter::findorfail($id);
        return view('edit_dokter', compact('dktr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dktr = Dokter::findorfail($id);
        $dktr->update($request->all());
        return redirect('dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dktr = Dokter::findorfail($id);
        $dktr->delete();
        return back();
    }
}
