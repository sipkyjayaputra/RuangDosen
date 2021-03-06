<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Pengajaran;
use App\Semester;
use App\File;
use App\Log_Aktivitas;

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
            'nama' => 'required'
        ]);
        
        $tujuan = "../public/upload_file";
        $dokumen->semester_id = $request->semester_id;
        $dokumen->tipe_id = $request->tipe;
        $dokumen->kategori = $request->kategori;
        $dokumen->nama = $request->nama;
        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($tujuan,$nama_file);
        $dokumen->filename = $nama_file;
        if($request->keterangan != ""){
            $dokumen->keterangan = $request->keterangan;
        }else{
            $dokumen->keterangan = "";
        }

        $dokumen->save();
        Self::addActivity($dokumen->semester_id,$dokumen->tipe_id,"Melakukan Penambahan file ".$nama_file);
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
        $dokumen = File::find($id);

        $request->validate([
            'semester_id' => 'required',
            'tipe' => 'required',
            'kategori' => 'required',
            'nama' => 'required'
        ]);
        
        if($request->filename != $dokumen->filename && $request->filename != ""){
            $tujuan = "../public/upload_file";
            $file = $request->file('dok');
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move($tujuan,$nama_file);
            $dokumen->filename = $nama_file;
        }else{
            $dokumen->filename = $dokumen->filename;
        }

        if($request->keterangan != ""){
            $dokumen->keterangan = $request->keterangan;
        }else{
            $dokumen->keterangan = $dokumen->keterangan;
        }

        $dokumen->semester_id = $request->semester_id;
        $dokumen->tipe_id = $request->tipe;
        $dokumen->kategori = $request->kategori;
        $dokumen->nama = $request->nama;

        $dokumen->save();
        Self::addActivity($dokumen->semester_id,$dokumen->tipe_id,"Melakukan Perubahan pada File ");
        return redirect('/bkd/laporan_kerja/'.$request->semester_id);
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
        $dokumen = File::Find($id);

        $dokumen->delete();
        Self::addActivity($dokumen->semester_id,$dokumen->tipe_id,"Melakukan Penghapusan pada File ".$dokumen->nama);

        return redirect('bkd/laporan_kerja/'.$dokumen->semester_id);
    }

    public function addActivity($semester_id,$kategori_id,$keterangan){
        $aktivitas = new Log_Aktivitas();
        $aktivitas->user_id = auth()->user()->id;

        $aktivitas->semester_id = $semester_id;
        $aktivitas->kategori_id = $kategori_id;
        $aktivitas->keterangan = $keterangan;

        $aktivitas->Save();
    }
}
