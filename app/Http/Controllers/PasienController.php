<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Pasien;
use Validator;

class PasienController extends Controller
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
        $data['pasien'] = Pasien::all();
        return view('pasien.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = Pasien::create([
            "username" => $request->username,
            "password"  => $request->password,
            "nama_user" => $request->nama_user,
            "alamat" => $request->alamat,
            "nohp_user" => $request->nohp_user,
            "umur" => $request->umur,
            "jeniskelamin" => $request->jeniskelamin,
            "goldarah" => $request->goldarah,
            "ttl_pasien" => $request->ttl_pasien,
            "keterangan" => $request->keterangan,
        ]);

        if ($insert) {
            return redirect()->route('pasien.index')->with('success', 'Berhasil menambah kategori.');
        } else {
            return redirect()->route('pasien.index')->with('error', 'Gagal menambah data kategori.');
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
        $data['pasien'] = Pasien::find($id);
        return view("pasien.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pasien'] = Pasien::find($id);
        return view("pasien.edit", $data);
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
        $insert = Pasien::where("id",$id)->update([
            "username" => $request->username,
            "password"  => $request->password,
            "nama_user" => $request->nama_user,
            "alamat" => $request->alamat,
            "nohp_user" => $request->nohp_user,
            "umur" => $request->umur,
            "jeniskelamin" => $request->jeniskelamin,
            "goldarah" => $request->goldarah,
            "ttl_pasien" => $request->ttl_pasien,
            "keterangan" => $request->keterangan,
        ]);

        if ($insert) {
            return redirect()->route('pasien.index')->with('success', 'Berhasil menambah kategori.');
        } else {
            return redirect()->route('pasien.index')->with('error', 'Gagal menambah data kategori.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::where("id",$id)->delete();
        return redirect()->route("pasien.index");
    }

}
