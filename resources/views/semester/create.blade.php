@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-center">
 		<div class="col-md-8">
 			<div class="card">
 				<div class="card-header">Buat Semester Baru</div>
 				<div class="card-body">
 					<form action="{{ url('bkd/semesterNew') }}" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Keterangan</label>
 							<input type="text" name="keterangan" class="form-control">
 						</div>
 						<input type="hidden" name="status" value="0">
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 @endsection