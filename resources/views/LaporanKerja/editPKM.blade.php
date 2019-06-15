@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Edit Mata Kuliah</h1>
@stop

 @section('content')
 			<div class="card">
 				<div class="card-body">
 					<form action="/bkd/laporan_kerja/{{$pkm->id}}" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Judul PKM : </label>
 							<input type="text" name="judul" class="form-control" value="{{$pkm->judul}}">
 						</div>
 						<div class="form-group">
 							<label>Tempat Pelaksanaan : </label>
 							<input type="text" name="tempat" class="form-control" value="{{$pkm->tempat}}">
 						</div>
 						<div class="form-group">
 							<label>Tanggal Pelaksanaan : </label>
 							<input type="text" name="tanggal" class="form-control" value="{{$pkm->tanggal}}">
 						</div>
 						<input type="hidden" name="tipe" value="pkm">
 						<input type="hidden" name="semester_id" value="{{ $semester->id }}">
 						<button type="submit" class="btn btn-primary glyphicon glyphicon-save"> Simpan</button>
 					</form>
 				</div>
 			</div>
 @stop