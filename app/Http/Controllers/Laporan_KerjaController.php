<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan_Kerja;
use App\Semester;
use App\Kategori;
use App\Pengajaran;

class Laporan_KerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $semester =  Semester::find($id);
        /*if($semester->initiate_status == 0){
            Self::lapkerja($semester->id);
            $semester->initiate_status = 1;
            $semester->Save();
        }*/
        $pengajarans = Pengajaran::all();
        return view('LaporanKerja.index', compact('semester','pengajarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $semester = Semester::find($id);
        $kategoris = Kategori::all();
        return view('LaporanKerja.create', compact('semester','kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pengajaran = new Pengajaran();

        $request->validate([
            'semester_id' => 'required',
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required',
            'pt' => 'required'
        ]);

        $pengajaran->semester_id = $request->semester_id;
        $pengajaran->kode_mk = $request->kode_mk;
        $pengajaran->nama_mk = $request->nama_mk;
        $pengajaran->sks = $request->sks;
        $pengajaran->pt = $request->pt;

        $pengajaran->save();
        $semester_id = $request->semester_id;
        return redirect('/bkd/laporan_kerja/'.$semester_id);
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
