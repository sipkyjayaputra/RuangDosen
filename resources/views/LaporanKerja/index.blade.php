@extends('layouts.app')

@section('content')
<div class="containet">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<h1>Laporan Kerja Dosen</h1>
			<a href="/bkd/laporan_kerja/{{$semester->id}}/new" class="btn btn-primary btn-sm">add</a>
			<div class="card">
				<div class="card-header">Pengajaran</div>
				<div class="card-body">
					<table class="table table-striped">
						<tr>
							<th>Dokumen</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						@foreach($laporankerjas as $laporankerja)
						<?php if($laporankerja->semester_id == $semester->id && $laporankerja->kategori_id ==1){ ?>
						<tr>
							<td>{{ $laporankerja->nama_laporan }}</td>
							<td>{{ $laporankerja->status }}</td>
							<td>
								<a class="btn btn-primary btn-sm" href="/bkd/laporan_kerja/file/{{$laporankerja->id}}">view</a>
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
			</div>
			<div class="card">
				<div class="card-header">Penelitian</div>
				<div class="card-body">					
					<table class="table table-striped">
						<tr>
							<th>Dokumen</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						@foreach($laporankerjas as $laporankerja)
						<?php if($laporankerja->semester_id == $semester->id && $laporankerja->kategori_id ==2){ ?>
						<tr>
							<td>{{ $laporankerja->nama_laporan }}</td>
							<td>{{ $laporankerja->status }}</td>
							<td>
								<a class="btn btn-primary btn-sm" href="/bkd/laporan_kerja/file/{{$laporankerja->id}}">view</a>
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
			</div>

			<div class="card">
				<div class="card-header">PKM</div>
				<div class="card-body">
					<table class="table table-striped">
						<tr>
							<th>Dokumen</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						@foreach($laporankerjas as $laporankerja)
						<?php if($laporankerja->semester_id == $semester->id && $laporankerja->kategori_id ==3){ ?>
						<tr>
							<td>{{ $laporankerja->nama_laporan }}</td>
							<td>{{ $laporankerja->status }}</td>
							<td>
								<a class="btn btn-primary btn-sm" href="/bkd/laporan_kerja/file/{{$laporankerja->id}}">view</a>
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
			</div>

			<div class="card">
				<div class="card-header">Publikasi</div>
				<div class="card-body">
					<table class="table table-striped">
						<tr>
							<th>Dokumen</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						@foreach($laporankerjas as $laporankerja)
						<?php if($laporankerja->semester_id == $semester->id && $laporankerja->kategori_id ==4){ ?>
						<tr>
							<td>{{ $laporankerja->nama_laporan }}</td>
							<td>{{ $laporankerja->status }}</td>
							<td>
								<a class="btn btn-primary btn-sm" href="/bkd/laporan_kerja/file/{{$laporankerja->id}}">view</a>
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
			</div>
			<div class="card">
				<div class="card-header">Kegiatan Lain-Lain</div>
				<div class="card-body">
					<table class="table table-striped">
						<tr>
							<th>Dokumen</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						@foreach($laporankerjas as $laporankerja)
						<?php if($laporankerja->semester_id == $semester->id && $laporankerja->kategori_id ==5){ ?>
						<tr>
							<td>{{ $laporankerja->nama_laporan }}</td>
							<td>{{ $laporankerja->status }}</td>
							<td>
								<a class="btn btn-primary btn-sm" href="/bkd/laporan_kerja/file/{{$laporankerja->id}}">view</a>
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection