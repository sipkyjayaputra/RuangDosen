<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    public function Laporan_Kerja(){
    	return $this->belongsTo('App\Laporan_Kerja');
    }

    public function getKategoriAttribute(){
    	switch($this->attributes['kategori']){
    		case 1 : return "Surat Tugas"; break;
    		case 2 :return "Kartu Realisasi Perkuliahan"; break;
    		case 3 : return "Absensi"; break;
    		case 4 : return "Nilai"; break;
    		case 5 : return "Laporan"; break;
    		case 6 : return "Surat Tugas"; break;
    		case 7 : return "Proposal"; break;
    		case 8 : return "Surat Tugas"; break;
    		case 9 : return "Laporan"; break;
    		case 10 : return "Materi/Modul"; break;
    		case 11 : return "Proposal"; break;
    		case 12 : return "Dokumen/Tulisan"; break;
    		case 13 : return "Sertifikat"; break;
    		case 14 : return "Surat Tugas"; break;
    		case 15 : return "Surat Tugas"; break;
    		case 16 : return "Sertifikat"; break;
    		default : break;
    	}
    }

    
    public function getUpdatedAtAttributes(){
        retrun \Carbon\Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
