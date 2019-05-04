<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use App\Laporan_Kerja;
Use App\User;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('semester.create');
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
        $semester = new Semester();
        $request->validate([
            'keterangan' => 'required',
            'status' => 'required'
        ]);

        $semester->keterangan = $request->keterangan;
        $semester->status = $request->status;
        $semester->user_id = auth()->user()->id;

        $semester->Save();
        return redirect('bkd');
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
        $semester = Semester::find($id);
        return view('semester.edit', compact('semester'));
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
        $request->validate([
            'keterangan' => 'required',
            'status' => 'required'
        ]);

        $semester = Semester::find($id);
        $semester->keterangan = $request->keterangan;
        $semester->status = $request->status;

        $semester->save();

        return redirect('bkd');

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
        $semester = Semester::find($id);
        $semester->delete();

        return redirect('bkd');
    }
}