<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antrian;
use App\RS;
use App\Hasil;
use Validator;

class AntrianController extends Controller
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
        return view('antrian.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nama_rs)
    {
        $data['nama_rs'] = $nama_rs;
        return view('antrian.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = Antrian::create([
            'nama_pasien' => $request->nama_pasien,
            'nama_rs' => $request->nama_rs,
            'jadwalpilihan' => $request->jadwalpilihan,
            'keluhan' => $request->keluhan,
            'status' => 'MENUNGGU',
        ]);

        if ($insert) {
            return redirect()->route('antrian.index')->with('success', 'Berhasil menambah data produk.');
        } else {
            return redirect()->route('antrian.index')->with('error', 'Gagal menambah data produk.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama_rs)
    {
        $data['antrian'] = Antrian::select('id', 'nama_pasien', 'nama_rs', 'jadwalpilihan', 'keluhan', 'status')
            ->where("nama_rs",$nama_rs)
            ->orderBy('status')
            ->get();
        $data['nama_rs'] = $nama_rs;
        $data['maxValue'] = Antrian::where('nama_rs', $nama_rs)->count('id');
        return view("antrian.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function proses($id)
    {
        $data['antrian'] = Antrian::find($id);
        return view("antrian.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Antrian::where("nama_pasien",$request->nama_pasien)->update([
            'status' => "SELESAI",
        ]);
        Hasil::create([
            'id_pasien' => "0",
            'nama_pasien' => $request->nama_pasien,
            'nama_rs' => $request->nama_rs,
            'jadwaltest' => $request->jadwaltest,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route("hasil.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Antrian::where("id",$id)->delete();
        return redirect()->back();
    }

    public function bersihkan($nama_rs)
    {
        Antrian::where("nama_rs", $nama_rs)->delete();
        return redirect()->back();
    }
    
}
