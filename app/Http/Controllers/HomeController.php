<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kateogris = Kategori::all();
        if($kateogris->isEmpty()){
            $kategori = new Kategori();
            $kategori->keterangan = "Surat Tugas";
            $kategori->type_id = 1;
            $kategori->save();

            echo "pankapan";

            $kategori = new Kategori();
            $kategori->keterangan = "Kartu Realisasi Perkuliahan";
            $kategori->type_id = 1;
            $kategori->save();


            $kategori = new Kategori();
            $kategori->keterangan = "Absensi";
            $kategori->type_id = 1;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Nilai";
            $kategori->type_id = 1;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Laporan";
            $kategori->type_id = 2;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Surat Tugas";
            $kategori->type_id = 2;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Proposal";
            $kategori->type_id = 2;
            $kategori->save();


            $kategori = new Kategori();
            $kategori->keterangan = "Surat Tugas";
            $kategori->type_id = 3;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Laporan";
            $kategori->type_id = 3;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Materi/Modul";
            $kategori->type_id = 3;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Proposal";
            $kategori->type_id = 3;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Dokumen/Tulisan";
            $kategori->type_id = 4;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Sertifikat";
            $kategori->type_id = 4;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Surat Tugas";
            $kategori->type_id = 4;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Surat Tugas";
            $kategori->type_id = 5;
            $kategori->save();

            $kategori = new Kategori();
            $kategori->keterangan = "Sertifikat";
            $kategori->type_id = 5;
            $kategori->save();
        }
        
        return view('home');
    }
}
