@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Edit Mata Kuliah</h1>
@stop

 @section('content')
 			<div class="card">
 				<div class="card-body">
 					<form action="/bkd/laporan_kerja/{{$penelitian->id}}" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Judul Penelitian : </label>
 							<input type="text" name="judul" class="form-control" value="{{$penelitian->judul}}">
 						</div>
 						<div class="form-group">
 							<label>Durasi Penelitian : </label>
 							<input type="text" name="durasi" class="form-control" value="{{$penelitian->durasi}}">
 						</div>
 						<div class="form-group">
 							<label>Keterangan</label>
 							<input type="text" name="keterangan" class="form-control" value="{{$penelitian->keterangan}}">
 						</div>
 						<input type="hidden" name="tipe" value="penelitian">
 						<input type="hidden" name="semester_id" value="{{ $semester->id }}">
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</form>
 				</div>
 			</div>
 @stop