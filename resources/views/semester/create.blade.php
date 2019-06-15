@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Semester</h1>
	@stop

 @section('content')
 <h2>Buat Semester</h2>
 			<div class="card">
 				<div class="card-body">
 					<form action="{{ url('bkd/semesterNew') }}" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Keterangan</label>
 							<input type="text" name="keterangan" class="form-control">
 						</div>
 						<input type="hidden" name="status" value="0">
 						<button type="submit" class="btn btn-primary  glyphicon glyphicon-save">Simpan</button>
 					</form>
 				</div>
 			</div>
 @endsection