<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Log_Aktivitas;

class EditPasswordController extends Controller
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
        return view('vendor/adminlte/editpassword', compact('user'));
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
            'password_lama' => 'required',
            'password_baru' => 'required',
            'retype_password' => 'required'
        ]);

        if(Hash::check($request->password_lama,$user->password)){
            if($request->password_baru == $request->retype_password){
                $user->password = Hash::make($request->password_baru);
                $user->Save();
                Self::addActivity(0,0,"Melakukan Perubahan Password");
                return redirect('/home');
            }else{
                return redirect('/admin/settingspassword');
            }
        }else{
            return redirect('/admin/settingspassword');
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
        //
    }

    public function addActivity($semester_id,$kategori_id,$keterangan){
        $aktivitas = new Log_Aktivitas();
        $aktivitas->user_id = auth()->user()->id;;
        $aktivitas->semester_id = $semester_id;
        $aktivitas->kategori_id = $kategori_id;
        $aktivitas->keterangan = $keterangan;

        $aktivitas->save();
    }
}
