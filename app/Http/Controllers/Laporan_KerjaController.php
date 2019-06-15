<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan_Kerja;
use App\Semester;
use App\Kategori;
use App\Pengajaran;
use App\Penelitian;
use App\PKM;
use App\Publikasi;
use App\Lainlain;
use App\File;
use App\Log_Aktivitas;

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
        $kategoris = Kategori::all();
        $pengajarans = Pengajaran::all();
        $penelitians = Penelitian::all();
        $pkms = PKM::all();
        $publikasis = Publikasi::all();
        $lainlains = Lainlain::all();
        $files = File::all();
        return view('LaporanKerja.index', compact('semester','pengajarans','penelitians','pkms','publikasis','lainlains','kategoris','files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id,$tipe)
    {
        //
        $semester = Semester::find($id);
        $kategoris = Kategori::all();
        if($tipe==1){
            return view('LaporanKerja.createPengajaran', compact('semester','kategoris'));
        }elseif($tipe==2){
            return view('LaporanKerja.createPenelitian', compact('semester','kategoris'));
        }elseif($tipe==3){
            return view('LaporanKerja.createPKM', compact('semester','kategoris'));
        }elseif($tipe==4){
            return view('LaporanKerja.createPublikasi', compact('semester','kategoris'));
        }else{
            return view('LaporanKerja.createLainlain', compact('semester','kategoris'));
        }
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
        switch ($request->tipe) {
        case "pengajaran" : {
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
            Self::addActivity($pengajaran->semester_id,1,"Melakukan penambahan Mata Kuliah ".$pengajaran->nama_mk);
        } break;
        case "penelitian" : {
            $penelitian = new Penelitian();

            $request->validate([
                'semester_id' => 'required',
                'judul' => 'required',
                'durasi' => 'required',
                'keterangan' => 'required'
            ]);

            $penelitian->semester_id = $request->semester_id;
            $penelitian->judul = $request->judul;
            $penelitian->durasi = $request->durasi;
            $penelitian->keterangan = $request->keterangan;

            $penelitian->save();
            Self::addActivity($penelitian->semester_id,2,"Melakukan penambahan Penelitian ".$penelitian->judul);
        }break;
        case "pkm" : {
            $pkm = new PKM();

            $request->validate([
                'semester_id' => 'required',
                'judul' => 'required',
                'tempat' => 'required',
                'tanggal' => 'required'
            ]);

            $pkm->semester_id = $request->semester_id;
            $pkm->judul = $request->judul;
            $pkm->tempat = $request->tempat;
            $pkm->tanggal = $request->tanggal;

            $pkm->save();
            Self::addActivity($pkm->semester_id,3,"Melakukan penambahan PKM ".$pkm->judul);
        }break;
        case "publikasi" : {
            $publikasi = new Publikasi();

            $request->validate([
                'semester_id' => 'required',
                'judul' => 'required',
                'halaman' => 'required',
                'penulis' => 'required'
            ]);

            $publikasi->semester_id = $request->semester_id;
            $publikasi->judul = $request->judul;
            $publikasi->halaman = $request->halaman;
            $publikasi->penulis = $request->penulis;

            $publikasi->save();
            Self::addActivity($pkm->semester_id,4,"Melakukan penambahan Publikasi ".$publikasi->judul);
        }break;
        case "lainlain" : {
            $lainlain = new Lainlain();

            $request->validate([
                'semester_id' => 'required',
                'jenis' => 'required',
                'kategori' => 'required',
                'keterangan' => 'required'
            ]);

            $lainlain->semester_id = $request->semester_id;
            $lainlain->jenis = $request->jenis;
            $lainlain->kategori = $request->kategori;
            $lainlain->keterangan = $request->keterangan;

            $lainlain->save();
            Self::addActivity($lainlain->semester_id,5,"Melakukan penambahan Lain-lain ".$lainlain->jenis);
        }break;
        default : {

        }break;
        }

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
    public function edit($id,$tipe)
    {
        //
        switch ($tipe) {
            case "pengajaran" : {
                $pengajaran = Pengajaran::find($id);
                $semester = Semester::find($pengajaran->semester_id);
                return view('LaporanKerja.editPengajaran', compact('pengajaran','semester'));
            }break;
            case "penelitian" : {
                $penelitian = Penelitian::find($id);
                $semester = Semester::find($penelitian->semester_id);
                return view('LaporanKerja.editPenelitian', compact('penelitian','semester'));
            }break;
            case "pkm" : {
                $pkm = PKM::find($id);
                $semester = Semester::find($pkm->semester_id);
                return view('LaporanKerja.editPKM', compact('pkm','semester'));
            }break;
            case "publikasi" : {
                $publikasi = Publikasi::find($id);
                $semester = Semester::find($publikasi->semester_id);
                return view('LaporanKerja.editPublikasi', compact('publikasi','semester'));
            }break;
            case "lainlain" : {
                $lainlain = Lainlain::find($id);
                $semester = Semester::find($lainlain->semester_id);
                return view('LaporanKerja.editLainlain', compact('lainlain','semester'));
            }
        }
        
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
        switch ($request->tipe) {
        case "pengajaran" : {
            $pengajaran = Pengajaran::find($id);

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
            Self::addActivity($pengajaran->semester_id,1,"Melakukan pengubahan terhadap Mata Kuliah");
        } break;
        case "penelitian" : {
            $penelitian = Penelitian::find($id);

            $request->validate([
                'semester_id' => 'required',
                'judul' => 'required',
                'durasi' => 'required',
                'keterangan' => 'required'
            ]);

            $penelitian->semester_id = $request->semester_id;
            $penelitian->judul = $request->judul;
            $penelitian->durasi = $request->durasi;
            $penelitian->keterangan = $request->keterangan;

            $penelitian->save();
            Self::addActivity($penelitian->semester_id,2,"Melakukan pengubahan terhadap Penelitian");
        }break;
        case "pkm" : {
            $pkm = PKM::find($id);

            $request->validate([
                'semester_id' => 'required',
                'judul' => 'required',
                'tempat' => 'required',
                'tanggal' => 'required'
            ]);

            $pkm->semester_id = $request->semester_id;
            $pkm->judul = $request->judul;
            $pkm->tempat = $request->tempat;
            $pkm->tanggal = $request->tanggal;

            $pkm->save();
            Self::addActivity($pkm->semester_id,3,"Melakukan pengubahan terhadap PKM");
        }break;
        case "publikasi" : {
            $publikasi = Publikasi::find($id);

            $request->validate([
                'semester_id' => 'required',
                'judul' => 'required',
                'halaman' => 'required',
                'penulis' => 'required'
            ]);

            $publikasi->semester_id = $request->semester_id;
            $publikasi->judul = $request->judul;
            $publikasi->halaman = $request->halaman;
            $publikasi->penulis = $request->penulis;

            $publikasi->save();
            Self::addActivity($publikasi->semester_id,4,"Melakukan pengubahan terhadap Publikasi");
        }break;
        case "lainlain" : {
            $lainlain = Lainlain::find($id);

            $request->validate([
                'semester_id' => 'required',
                'jenis' => 'required',
                'kategori' => 'required',
                'keterangan' => 'required'
            ]);

            $lainlain->semester_id = $request->semester_id;
            $lainlain->jenis = $request->jenis;
            $lainlain->kategori = $request->kategori;
            $lainlain->keterangan = $request->keterangan;

            $lainlain->save();
            Self::addActivity($pengajaran->semester_id,5,"Melakukan pengubahan terhadap Lain-lain");
        }break;
        default : {

        }break;
        }

        $semester_id = $request->semester_id;
        return redirect('/bkd/laporan_kerja/'.$semester_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$tipe)
    {
        //
        switch($tipe){
            case "pengajaran" : {                
                $pengajaran = Pengajaran::find($id);
                $semester_id = $pengajaran->semester_id;
                $pengajaran->delete();
                Self::addActivity($pengajaran->semester_id,1,"Melakukan penghapusan terhadap Mata Kuliah ".$pengajaran->nama_mk);
            }break;
            case "penelitian" : {
                $penelitian = Penelitian::find($id);
                $semester_id = $penelitian->semester_id;
                $penelitian->delete();
                Self::addActivity($penelitian->semester_id,2,"Melakukan penghapusan terhadap Penelitian ".$penelitian->judul);
            }break;
            case "pkm" : {
                $pkm = PKM::find($id);
                $semester_id = $pkm->semester_id;
                $pkm->delete();
                Self::addActivity($pkm->semester_id,3,"Melakukan penghapusan terhadap PKM ".$pkm->judul);
            }break;
            case "publikasi" : {
                $publikasi = Publikasi::find($id);
                $semester_id = $publikasi->semester_id;
                $publikasi->delete();
                Self::addActivity($publikasi->semester_id,4,"Melakukan penghapusan terhadap Publikasi ".$publikasi->judul);
            }break;
            case "lainlain" : {
                $lainlain = Lainlain::find($id);
                $semester_id = $lainlain->semester_id;
                $lainlain->delete();
                Self::addActivity($lainlain->semester_id,5,"Melakukan penghapusan terhadap Lain-lain ".$lainlain->jenis);
            }break;
            default : {

            }break;
        }


        return redirect('/bkd/laporan_kerja/'.$semester_id);
    }

    public function addActivity($semester_id,$kategori_id,$keterangan){
        $aktivitas = new Log_Aktivitas();
        $aktivitas->user_id = auth()->user()->id;;

        $aktivitas->semester_id = $semester_id;
        $aktivitas->kategori_id = $kategori_id;
        $aktivitas->keterangan = $keterangan;

        $aktivitas->Save();
    }
}
