<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //

    public function download($file_download,$semester_id){
    	$file_path = public_path('/upload_file/'.$file_download);
    	echo $file_path;
    	return response()->download($file_path);
        //return redirect('/bkd/laporan_kerja/'.$semester_id);
    }
}
