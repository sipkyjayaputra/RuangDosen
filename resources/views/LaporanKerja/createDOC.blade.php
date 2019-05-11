@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Input Dokumen</h1>
@stop

 @section('content')
 			<?php
 			switch ($type) {
 				case 1 : $isi = "pengajaran"; break;
 				case 2 : $isi = "penelitian"; break;
 				case 3 : $isi = "pkm"; break;
 				case 4 : $isi = "publikasi"; break;
 				case 5 : $isi = "lainlain"; break;
 				default : break;
 			}
 			?>
 			<div class="card">
 				<div class="card-body">
 					<form action="/bkd/laporan_kerja/{{$semester->id}}/newDOC" method="post" enctype="multipart/form-data">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Tipe : </label>
 							<input type="text" class="form-control" value="{{$isi}}" disabled>
 						</div>
 						<div class="form-group">
 							<label>Kategori : </label>
 							<select name="kategori" class="form-control">
 								<option value="1">kategori</option>
 								@foreach($kategoris as $kategori)
 								<?php if($kategori->type_id==$type){ ?>
 									<option value="{{$kategori->id}}">{{$kategori->keterangan}}</option>
 								<?php } ?>
 								@endforeach
 							</select>
 						</div> 
 						<div class="form-group">
 							<label>Nama : </label>
 							<input type="text" name="nama" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>File : </label>
 							<input type="file" name="file">
 						</div>
 						<div class="form-group">
 							<label>keterangan : </label>
 							<input type="text" name="keterangan" class="form-control">
 						</div>
 						<input type="hidden" name="tipe" value="{{$type}}">
 						<input type="hidden" name="semester_id" value="{{ $semester->id }}">
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</form>
 				</div>
 			</div>
 @stop