<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tindakan;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtTindakan = Tindakan::all();
        return view('tindakan', compact('dtTindakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_tindakan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tindakan::create([
            'id' => $request -> id,
            'id_periksa_poli' => $request -> id_periksa_poli,
            'id_tindakan' => $request -> id_tindakan,
            'harga' => $request -> harga,
            'jml' => $request -> jml,
            'created_by' => $request -> created_by,
            'created_at' => $request -> created_at,
            'edited_by' => $request -> edited_by,
            'edited_at' => $request -> edited_at,
        ]);
        return redirect('tindakan');
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
        $tndkn = Tindakan::findorfail($id);
        return view('edit_tindakan', compact('tndkn'));
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
        $tndkn = Tindakan::findorfail($id);
        $tndkn->update($request->all());
        return redirect('tindakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tndkn = Tindakan::findorfail($id);
        $tndkn->delete();
        return back();
    }
}
