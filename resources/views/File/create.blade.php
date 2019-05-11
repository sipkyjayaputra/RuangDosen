@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Input Dokumen</h1>
@stop

 @section('content')
 			<div class="card">
 				<div class="card-body">
 					<form action="/bkd/laporan_kerja/{{$semester->id}}/new" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Jenis</label>
 							<input type="text" name="kode_mk" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Judul</label>
 							<input type="text" name="nama_mk" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Keterangan</label>
 							<input type="text" name="sks" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Kategori</label>
 							<select>
 								<option value="#">Pilih Kategori</option>
 								@foreach($kategoris->$kategori)
 								<option value="{{ $kategori->id }}">{{ $kategori->keterangan }}</option>
 								@endforeach
 							</select>
 						</div>
 						<input type="hidden" name="type_id" value="{{ $pengajaran->id }}">
 						<input type="hidden" name="semester_id" value="{{ $semester->id }}">
 						<button type="submit" class="btn btn-primary">Simpan</button>
 					</form>
 				</div>
 			</div>
 @stop