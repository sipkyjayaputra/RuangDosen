@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>{{ $semester->keterangan }}</h1>
@stop

@section('content')
					<div class="card">
				<div class="card-header">Pengajaran
					<a href="/bkd/laporan_kerja/{{$semester->id}}/new" class="btn btn-primary btn-sm">add</a>
				</div>


				<div class="card-body">

					<table class="table table-striped">
						<tr>
							<th>Kode MK</th>
							<th>Nama MK</th>
							<th>SKS</th>
							<th>Perguruan Tinggi</th>
							<th>Tindakan</th>
						</tr>
						@foreach($pengajarans as $pengajaran)
						<?php if($pengajaran->semester_id == $semester->id){ ?>
						<tr>
							<td>{{ $pengajaran->kode_mk }}</td>
							<td>{{ $pengajaran->nama_mk }}</td>
							<td>{{ $pengajaran->sks }}</td>
							<td>{{ $pengajaran->pt }}</td>
							<td>
								<a class="btn btn-primary btn-sm" href="/bkd/laporan_kerja/file/{{$pengajaran->id}}">view</a>
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
				<div class="card-header">Dokumen
					<a href="/bkd/laporan_kerja/{{$semester->id}}/new" class="btn btn-primary btn-sm">add</a>
				</div>

				<div class="card-body">					
					<table class="table table-striped">
						<tr>
							<th>Jenis</th>
							<th>Nama</th>
							<th>keterangan</th>
							<th>Tindakan</th>
						</tr>

					</table>
				</div>
			</div>
@endsection