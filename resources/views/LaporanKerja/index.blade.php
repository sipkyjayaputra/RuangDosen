@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>{{ $semester->keterangan }}</h1>
@stop

@section('content')
			<div class="col-lg-12">
				<div class="col-lg-6" style="border-radius: 10px; ">
			<div class="card panel panel-info">
				<div class="card-header panel-heading">Pengajaran
					<a href="/bkd/laporan_kerja/{{$semester->id}}/new/<?php echo "1"; ?>" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<table class="table table-striped">
						<tr>
							<th>Kode MK</th>
							<th>Nama MK</th>
							<th>SKS</th>
							<th>Perguruan Tinggi</th>
							<th>Tindakan</th>
						</tr>
						@foreach($pengajarans as $pengajaran)
						<?php if($pengajaran->semester_id == $semester->id){ $doc_id=$pengajaran->id?>
						<tr>
							<td>{{ $pengajaran->kode_mk }}</td>
							<td>{{ $pengajaran->nama_mk }}</td>
							<td>{{ $pengajaran->sks }}</td>
							<td>{{ $pengajaran->pt }}</td>
							<td class="col-sm-6">
								<a class="btn btn-primary btn-sm col-sm-2" href="/bkd/laporan_kerja/file/{{$pengajaran->id}}/pengajaran">Edit</a>
								<form action="/bkd/laporan_kerja/file/{{$pengajaran->id}}/pengajaran" method="post" >
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm col-sm-2">Hapus</button>
								</form> 
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
				<div class="card-header panel-heading">Dokumen
					<a href="/bkd/laporan_kerja/{{$semester->id}}/newDOC/1" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>		
				</div>
				<div class="card-body  panel-body">					
					<table class="table table-striped">
						<tr>
							<th>Jenis</th>
							<th>Nama</th>
							<th>keterangan</th>
							<th>Tindakan</th>
						</tr>
						@foreach($files as $file)
						<?php if($file->semester_id == $semester->id && $file->tipe_id==1){  ?>
						<tr>
							<td>{{ $file->kategori }}</td>
							<td>{{ $file->nama }}</td>
							<td>{{ $file->keterangan }}</td>
							<td class="col-sm-6">
								<a class="btn btn-primary btn-sm col-sm-2" href="/bkd/laporan_kerja/file/{{$file->id}}">Edit</a>
								<form action="/bkd/laporan_kerja/file/{{$file->id}}" method="post" >
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm col-sm-2">Hapus</button>
								</form> 
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
			</div>
		</div>

		<div class="col-lg-6" style="border-radius: 10px; ">
			<div class="card panel panel-info">
				<div class="card-header panel-heading">Penelitian
					<a href="/bkd/laporan_kerja/{{$semester->id}}/new/<?php echo "2"; ?>" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<table class="table table-striped">
						<tr>
							<th>Judul</th>
							<th>Durasi</th>
							<th>Keterangan</th>
							<th>Tindakan</th>
						</tr>
						@foreach($penelitians as $penelitian)
						<?php if($penelitian->semester_id == $semester->id){ $doc_id=$penelitian->id?>
						<tr>
							<td>{{ $penelitian->judul }}</td>
							<td>{{ $penelitian->durasi}}</td>
							<td>{{ $penelitian->keterangan }}</td>
							<td class="col-sm-6">
								<a class="btn btn-primary btn-sm col-sm-2" href="/bkd/laporan_kerja/file/{{$penelitian->id}}/penelitian">Edit</a>
								<form action="/bkd/laporan_kerja/file/{{$penelitian->id}}/penelitian" method="post" >
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm col-sm-2">Hapus</button>
								</form> 
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
				<div class="card-header panel-heading">Dokumen
					<a href="/bkd/laporan_kerja/{{$semester->id}}/newDOC/2" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>	
				</div>
				<div class="card-body panel-body">					
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
		</div>
	</div>

<div class="col-lg-12" style="padding-top: 20px">
		<div class="col-lg-6" style="border-radius: 10px; ">
			<div class="card panel panel-info">
				<div class="card-header panel-heading">PKM
					<a href="/bkd/laporan_kerja/{{$semester->id}}/new/<?php echo "3"; ?>" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<table class="table table-striped">
						<tr>
							<th>Judul</th>
							<th>Tempat</th>
							<th>Tanggal</th>
							<th>Tindakan</th>
						</tr>
						@foreach($pkms as $pkm)
						<?php if($pkm->semester_id == $semester->id){ $doc_id=$pkm->id?>
						<tr>
							<td>{{ $pkm->judul }}</td>
							<td>{{ $pkm->tempat}}</td>
							<td>{{ $pkm->tanggal }}</td>
							<td class="col-sm-6">
								<a class="btn btn-primary btn-sm col-sm-2" href="/bkd/laporan_kerja/file/{{$pkm->id}}/pkm">Edit</a>
								<form action="/bkd/laporan_kerja/file/{{$pkm->id}}/pkm" method="post" >
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm col-sm-2">Hapus</button>
								</form> 
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
				<div class="card-header panel-heading">Dokumen
					<a href="/bkd/laporan_kerja/{{$semester->id}}/newDOC/3" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">					
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
		</div>

		<div class="col-lg-6" style="border-radius: 10px; ">
			<div class="card panel panel-info">
				<div class="card-header panel-heading">Publikasi
					<a href="/bkd/laporan_kerja/{{$semester->id}}/new/<?php echo "4"; ?>" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<table class="table table-striped">
						<tr>
							<th>Judul</th>
							<th>Banyak Halaman</th>
							<th>Penulis</th>
							<th>Tindakan</th>
						</tr>	
						@foreach($publikasis as $publikasi)
						<?php if($publikasi->semester_id == $semester->id){ $doc_id=$publikasi->id?>
						<tr>
							<td>{{ $publikasi->judul }}</td>
							<td>{{ $publikasi->halaman}}</td>
							<td>{{ $publikasi->penulis }}</td>
							<td class="col-sm-6">
								<a class="btn btn-primary btn-sm col-sm-2" href="/bkd/laporan_kerja/file/{{$publikasi->id}}/publikasi">Edit</a>
								<form action="/bkd/laporan_kerja/file/{{$publikasi->id}}/publikasi" method="post" >
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm col-sm-2">Hapus</button>
								</form> 
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
				<div class="card-header panel-heading">Dokumen
					<a href="/bkd/laporan_kerja/{{$semester->id}}/newDOC/4" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>	
				</div>
				<div class="card-body panel-body">					
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
		</div>
</div>

<div class="col-lg-12" style="padding-top: 20px">
	<div class="col-lg-6" style="border-radius: 10px; ;">
			<div class="card panel panel-info">
				<div class="card-header panel-heading">Lain-lain
					<a href="/bkd/laporan_kerja/{{$semester->id}}/new/<?php echo "5"; ?>" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
				</div>
				<div class="card-body panel-body">
					<table class="table table-striped">
						<tr>
							<th>Jenis</th>
							<th>Kategori</th>
							<th>Keterangan</th>
							<th>Tindakan</th>
						</tr>

						@foreach($lainlains as $lainlain)
						<?php if($lainlain->semester_id == $semester->id){ $doc_id=$lainlain->id?>
						<tr>
							<td>{{ $lainlain->jenis }}</td>
							<td>{{ $lainlain->kategori}}</td>
							<td>{{ $lainlain->keterangan }}</td>
							<td class="col-sm-6">
								<a class="btn btn-primary btn-sm col-sm-2" href="/bkd/laporan_kerja/file/{{$lainlain->id}}/lainlain">Edit</a>
								<form action="/bkd/laporan_kerja/file/{{$lainlain->id}}/lainlain" method="post" >
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm col-sm-2">Hapus</button>
								</form> 
							</td>
						</tr>
						<?php }	?>
						@endforeach
					</table>
				</div>
				<div class="card-header panel-heading">Dokumen
					<a href="/bkd/laporan_kerja/{{$semester->id}}/newDOC/5" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>	
				</div>
				<div class="card-body panel-body">					
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
		</div>
		<div class="col-lg-6"></div>
	</div>

@stop
