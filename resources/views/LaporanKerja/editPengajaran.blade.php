@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Edit Mata Kuliah</h1>
@stop

 @section('content')
 			<div class="card">
 				<div class="card-body">
 					<form action="/bkd/laporan_kerja/{{$pengajaran->id}}" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Kode Mata Kuliah</label>
 							<input type="text" name="kode_mk" class="form-control" value="{{ $pengajaran->kode_mk }}">
 						</div>
 						<div class="form-group">
 							<label>Nama Mata Kuliah</label>
 							<input type="text" name="nama_mk" class="form-control" value="{{ $pengajaran->nama_mk }}">
 						</div>
 						<div class="form-group">
 							<label>SKS</label>
 							<input type="text" name="sks" class="form-control" value="{{ $pengajaran->sks }}">
 						</div>
 						<div class="form-group">
 							<label>Perguruan Tinggi</label>
 							<input type="text" name="pt" class="form-control" value="{{ $pengajaran->pt }}">
 						</div>
 						<input type="hidden" name="tipe" value="pengajaran">
 						<input type="hidden" name="semester_id" value="{{ $semester->id }}">
 						<button type="submit" class="btn btn-primary glyphicon glyphicon-save"> Simpan</button>
 					</form>
 				</div>
 			</div>
 @stop