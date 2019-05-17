@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Riwayat Pendidikan</h1>
@stop

 @section('content')
 			<div class="card">
 				<div class="card-body">
 					<form action="/riwayatpendidikan/add" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Gelar : </label>
 							<input type="text" name="gelar" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Perguruan Tinggi : </label>
 							<input type="text" name="pt" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Jurusan</label>
 							<input type="text" name="jurusan" class="form-control">
 						</div>
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</form>
 				</div>
 			</div>
 @stop