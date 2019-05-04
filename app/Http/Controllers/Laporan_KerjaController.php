<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan_Kerja;
use App\Semester;
use App\Kategori;

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
        if($semester->initiate_status == 0){
            Self::lapkerja($semester->id);
            $semester->initiate_status = 1;
            $semester->Save();
        }
        $laporankerjas = Laporan_Kerja::all();
        return view('LaporanKerja.index', compact('semester','laporankerjas'));
    }

    public function lapkerja($semester_id){
        for($i=1;$i<6;$i++){
            switch($i){
                case 1 : { //pengajaran
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Surat Tugas";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Kartu Realisasi Perkuliahan";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Absensi Mahasiswa";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Nilai";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                } break;
                case 2 : { //penelitian
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan ="Proposal";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Laporan";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Surat Tugas";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                } break;
                case 3 : { //PKM
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Proposal";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Laporan";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Materi/Moduk";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Surat Tugas";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                } break;
                case 4 : {
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Dokumen/Tulisan";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Sertifikat";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Surat Tugas";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                } break;
                case 5 : {
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Surat Tugas";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();
                    $Laporan_Kerja = new Laporan_Kerja();
                    $Laporan_Kerja->semester_id = $semester_id;
                    $Laporan_Kerja->kategori_id = $i;
                    $Laporan_Kerja->nama_laporan = "Sertifikat";
                    $Laporan_Kerja->status = 0;
                    $Laporan_Kerja->Save();                    
                } break;
                default :  break;
            }
        }
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
        $laporankerja = new Laporan_Kerja();

        $request->validate([
            'semester_id' => 'required',
            'kategori_id' => 'required',
            'nama_laporan' => 'required',
            'status' => 'required'
        ]);

        $laporankerja->semester_id = $request->semester_id;
        $laporankerja->kategori_id = $request->kategori_id;
        $laporankerja->nama_laporan = $request->nama_laporan;
        $laporankerja->status = $request->status;

        $laporankerja->save();
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
