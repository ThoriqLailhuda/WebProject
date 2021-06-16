<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bhp;

class BhpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBhp = Bhp::all();
        return view('bhp', compact('dtBhp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_bhp');
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
        Bhp::create([
            'id' => $request -> id,
            'id_bhp' => $request -> id_bhp,
            'harga' => $request -> harga,
            'jml' => $request -> jml,
            'created_by' => $request -> created_by,
            'created_at' => $request -> created_at,
            'edited_by' => $request -> edited_by,
            'edited_at' => $request -> edited_at,
        ]);
        return redirect('bhp');
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
        $bhp = Bhp::findorfail($id);
        return view('edit_bhp', compact('bhp'));
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
        $bhp = Bhp::findorfail($id);
        $bhp->update($request->all());
        return redirect('bhp');
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
