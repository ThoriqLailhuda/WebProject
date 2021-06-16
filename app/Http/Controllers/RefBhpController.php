<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ref_bhp;

class RefBhpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtRefBhp = Ref_bhp::all();
        return view('ref_bhp', compact('dtRefBhp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_ref_bhp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ref_bhp::create([
            'id' => $request -> id,
            'nama' => $request -> nama,
            'harga' => $request -> harga,
            'created_by' => $request -> created_by,
            'created_at' => $request -> created_at,
            'edited_by' => $request -> edited_by,
            'edited_at' => $request -> edited_at,
        ]);
        return redirect('ref_bhp');
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
        $refBhp = Ref_bhp::findorfail($id);
        return view('edit_ref_bhp', compact('refBhp'));
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
        $refBhp = Ref_bhp::findorfail($id);
        $refBhp->update($request->all());
        return redirect('ref_bhp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $refBhp = Ref_bhp::findorfail($id);
        $refBhp->delete();
        return back();
    }
}
