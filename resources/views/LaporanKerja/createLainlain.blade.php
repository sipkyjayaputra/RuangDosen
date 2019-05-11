@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Input Lain-Lain</h1>
@stop

 @section('content')
 			<div class="card">
 				<div class="card-body">
 					<form action="/bkd/laporan_kerja/{{$semester->id}}/new/5" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Jenis : </label>
 							<input type="text" name="jenis" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Kategori : </label>
 							<input type="text" name="kategori" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Keterangan : </label>
 							<input type="text" name="keterangan" class="form-control">
 						</div>
 						<input type="hidden" name="tipe" value="lainlain">
 						<input type="hidden" name="semester_id" value="{{ $semester->id }}">
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</form>
 				</div>
 			</div>
 @stop