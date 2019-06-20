<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Lainlain;
use App\Penelitian;
use App\Pengajaran;
use App\PKM;
use App\Publikasi;
use App\Semester;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Search.index');
    }

    public function search(Request $request){
        $pencarian = $request->cari;
        $files = File::All();
        $lainlains = Lainlain::ALl();
        $penelitians = Penelitian::All();
        $pengajarans = Pengajaran::All();
        $pkms = PKM::All();
        $publikasis = Publikasi::All();
        $semesters = Semester::All();

        if($pencarian == ""){
            $keterangan = "form pencarian tidak terisi";
            return view('Search.hasil',compact('keterangan','pencarian'));
        }else{
            $keterangan = "hasil pencarian dari ".$pencarian;
            return view('Search.hasil',compact('keterangan','semesters','files','pengajarans','penelitians','pkms','publikasis','lainlains','pencarian'));
        }
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
