<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Riwayat_Pendidikan;
use App\Log_Aktivitas;

class EditProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::find(auth()->user()->id);
        $riwayats = Riwayat_Pendidikan::all();
        return view('vendor/adminlte/indexprofil', compact('user','riwayats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit()
    {
        //
        $user = User::find(auth()->user()->id);
        $riwayats = Riwayat_Pendidikan::All();
        return view('vendor/adminlte/editprofile', compact('user','riwayats'));
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
        //
        $user = User::find(auth()->user()->id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'perguruan_tinggi' => 'required',
            'nidn' => 'required',
        ]);

        if($request->foto != $user->foto && $request->foto!= ""){
            $tujuan = "../public/foto_profil";
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move($tujuan,$nama_file);
            $user->foto = "foto_profil/".$nama_file;
        }else{
            $user->foto = $user->foto;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->perguruan_tinggi = $request->perguruan_tinggi;
        $user->nidn = $request->nidn;

        $user->Save();
        Self::addActivity(0,0,"Melakukan Perubahan Profile");

        return redirect('/home');
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

    public function addActivity($semester_id,$kategori_id,$keterangan){
        $aktivitas = new Log_Aktivitas();
        $aktivitas->user_id = auth()->user()->id;;
        $aktivtias->semester_id = $semester_id;
        $aktivtias->kategori_id = $kategori_id;
        $keterangan->keterangan = $keterangan;
    }
}
