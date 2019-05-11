<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Pengajaran;
use App\Semester;
use App\File;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('File.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id,$tipe)
    {
        //
        switch($tipe){
            case 1 : {
                $type = $tipe;
            }break;
            case 2 : {
                $type = $tipe;
            }break;
            case 3 : {
                $type = $tipe;
            }break;
            case 4 : {
                $type = $tipe;
            }break;
            case 5 : {
                $type = $tipe;
            }break;
            default : {

            }break;
        }
        $semester = Semester::find($id);
        $kategoris = Kategori::all();
        return view('LaporanKerja.createDOC',compact('semester','kategoris','type'));
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
        $dokumen = new File();

        $request->validate([
            'semester_id' => 'required',
            'tipe' => 'required',
            'file' => 'required',
            'kategori' => 'required',
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        
        $tujuan = "../upload_file";
        $dokumen->semester_id = $request->semester_id;
        $dokumen->tipe_id = $request->tipe;
        $dokumen->kategori = $request->kategori;
        $dokumen->nama = $request->nama;
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($tujuan,$nama_file);
        $dokumen->filename = $nama_file;
        $dokumen->keterangan = $request->keterangan;

        $dokumen->save();
        echo $dokumen->file;
        return redirect('/bkd/laporan_kerja/'.$request->semester_id);
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
        $file = File::find($id);
        $kategoris = Kategori::all();
        $type = $file->tipe_id;
        return view('LaporanKerja.editDOC', compact('file','kategoris','type'));
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
