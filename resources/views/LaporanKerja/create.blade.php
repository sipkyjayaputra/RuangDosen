@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-center">
 		<div class="col-md-8">
 			<div class="card">
 				<div class="card-header">Buat Laporan kegiatan</div>
 				<div class="card-body">
 					<form action="/bkd/laporan_kerja/{{$semester->id}}/new" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Kategori</label>
 							<select name="kategori_id" class="form-control">
 							@foreach($kategoris as $kategori)
 								<option value="{{$kategori->id}}" >{{$kategori->keterangan}}</option>
 							@endforeach
 							</select>
 						</div>
 						<div class="form-group">
 							<label>Nama Laporan</label>
 							<input type="text" name="nama_laporan" class="form-control">
 						</div>
 						<input type="hidden" name="status" value="0">
 						<input type="hidden" name="semester_id" value="{{ $semester->id }}">
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 @endsection