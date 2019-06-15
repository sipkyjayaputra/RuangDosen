<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log_Aktivitas;

class DownloadController extends Controller
{
    //

    public function download($file_download){
    	$file_path = public_path('/upload_file/'.$file_download);
    	Self::addActivity(0,0,"Melakukan Download File ".$file_download);
    	return response()->download($file_path);
        //return redirect('/bkd/laporan_kerja/'.$semester_id);
    }

    public function addActivity($semester_id,$kategori_id,$keterangan){
    	$aktivitas = new Log_Aktivitas();
    	$aktivitas->user_id = auth()->user()->id;;
    	$aktivitas->semester_id = $semester_id;
    	$aktivitas->kategori_id = $kategori_id;
    	$aktivitas->keterangan = "Download file ".$file_download;

    	$aktivitas->save();
    }
}
