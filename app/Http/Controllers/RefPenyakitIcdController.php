<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ref_penyakit_icd;

class RefPenyakitIcdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtRefPenyakitIcd = Ref_penyakit_icd::all();
        return view('ref_penyakit_icd', compact('dtRefPenyakitIcd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_ref_penyakit_icd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ref_penyakit_icd::create([
            'id' => $request -> id,
            'kode' => $request -> kode,
            'nama' => $request -> nama,
            'created_by' => $request -> created_by,
            'created_at' => $request -> created_at,
            'edited_by' => $request -> edited_by,
            'edited_at' => $request -> edited_at,
        ]);
        return redirect('ref_penyakit_icd');
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
        //
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
        //
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
