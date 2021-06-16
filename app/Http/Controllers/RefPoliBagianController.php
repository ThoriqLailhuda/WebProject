<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ref_poli_bagian;

class RefPoliBagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtRefPoliBagian = Ref_poli_bagian::all();
        return view('ref_poli_bagian', compact('dtRefPoliBagian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_ref_poli_bagian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ref_poli_bagian::create([
            'id' => $request -> id,
            'nama' => $request -> nama,
            'harga_pendaftaran' => $request -> harga_pendaftaran,
            'id_user' => $request -> id_user,
            'created_by' => $request -> created_by,
            'created_at' => $request -> created_at,
            'edited_by' => $request -> edited_by,
            'edited_at' => $request -> edited_at,
        ]);
        return redirect('ref_poli_bagian');
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
        $refPlBgn = Ref_poli_bagian::findorfail($id);
        return view('edit_ref_poli_bagian', compact('refPlBgn'));
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
        $refPlBgn = Ref_poli_bagian::findorfail($id);
        $refPlBgn->update($request->all());
        return redirect('ref_poli_bagian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
