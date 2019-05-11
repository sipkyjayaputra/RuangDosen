@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Edit Mata Kuliah</h1>
@stop

 @section('content')
 			<div class="card">
 				<div class="card-body">
 					<form action="/bkd/laporan_kerja/file/{{$publikasi->id}}" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Judul : </label>
 							<input type="text" name="judul" class="form-control" value="{{$publikasi->judul}}">
 						</div>
 						<div class="form-group">
 							<label>Banyak Halaman : </label>
 							<input type="text" name="halaman" class="form-control" value="{{$publikasi->halaman}}">
 						</div>
 						<div class="form-group">
 							<label>Penulis : </label>
 							<input type="text" name="penulis" class="form-control" value="{{$publikasi->penulis}}">
 						</div>
 						<input type="hidden" name="tipe" value="publikasi">
 						<input type="hidden" name="semester_id" value="{{ $semester->id }}">
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</form>
 				</div>
 			</div>
 @stop