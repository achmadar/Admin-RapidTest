<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RS;
use Validator;

class rsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rumahsakit'] = RS::all();
        return view('rs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = rs::create([
            'nama_rs' => $request->nama_rs,
            'alamat_rs' => $request->alamat_rs,
            'notelp_rs' => $request->notelp_rs,
            'jadwal_rs' => $request->jadwal_rs
        ]);

        if ($insert) {
            return redirect()->route('rs.index')->with('success', 'Berhasil menambah rumahsakit.');
        } else {
            return redirect()->route('rs.index')->with('error', 'Gagal menambah data rumahsakit.');
        }
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
        $data['rumahsakit'] = rs::find($id);
        return view("rs.edit", $data);
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
        rs::where("id",$id)->update($request->except("_token"));
        return redirect()->route("rs.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        rs::where("id",$id)->delete();
        return redirect()->route("rs.index");
    }
}
