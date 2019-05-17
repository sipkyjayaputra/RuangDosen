<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riwayat_Pendidikan;

class Riwayat_PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $riwayats = Riwayat_Pendidikan::All();
        return view('Riwayat_Pendidikan.index', compact('riwayats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Riwayat_Pendidikan.create');
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
        $riwayat = new Riwayat_Pendidikan();

        $request->validate([
            'gelar' => 'required',
            'pt' => 'required',
            'jurusan' => 'required'
        ]);

        $riwayat->user_id = auth()->user()->id;
        $riwayat->gelar = $request->gelar;
        $riwayat->perguruan_tinggi = $request->pt;
        $riwayat->jurusan = $request->jurusan;

        $riwayat->Save();

        return redirect('/admin/riwayatpendidikan');
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
