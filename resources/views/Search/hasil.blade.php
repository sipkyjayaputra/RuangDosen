@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<div class="col-md-12">
		<h1>Pencarian</h1>
	</div>

 			<div class="card">
 				<div class="card-body">
 					<div class="col-md-12">
 					<form action="{{ url('search/hasil') }}" method="post">
 						{{ csrf_field() }}
 						<div class="form-group col-md-8" >
 							<input type="text" name="cari" class="form-control" placeholder="Search Here"> 
 						</div>
 						<div class="col-md-4"><button type="submit" class="btn btn-primary  glyphicon glyphicon-search"> Search</button></div>
 					</form>
 					</div>
 				</div>
 			</div>
@stop

 @section('content')
 	<?php if($pencarian==""){ ?>
 		<h5><i>{{$keterangan}}</i></h5>
 	<?php }else{ ?>
 		<h5><i>{{$keterangan}}</i></h5>
 		@foreach($semesters as $semester)
 			<h3>{{$semester->keterangan}}</h3>
 			@foreach($pengajarans as $pengajaran)
 				<?php if($semester->id==$pengajaran->semester_id){ ?>
 					<?php
 						
 						if(strpos(($pengajaran->kode_mk.$pengajaran->nama_mk.$pengajaran->sks.$pengajaran->pt),$pencarian)){ 
 					?>
 						<h4>Pengajaran</h4>
 						<a href="/bkd/laporan_kerja/{{$semester->id}}">{{$pengajaran->kode_mk}}  {{$pengajaran->nama_mk}}  {{$pengajaran->sks}}  {{$pengajaran->pt}}</a>
 					<?php } ?>
 				<?php } ?>
 			@endforeach
 			@foreach($penelitians as $penelitian)
 				<?php if($semester->id==$penelitian->semester_id){ ?>
 					<?php
 						if(strpos(($penelitian->judul.$penelitian->durasi.$penelitian->keterangan),$pencarian)){ 
 					?>
 						<h4>Penelitian</h4>
 						<a href="/bkd/laporan_kerja/{{$semester->id}}">{{$penelitian->judul}}  {{$penelitian->durasi}}  {{$penelitian->keterangan}}</a>
 					<?php } ?>
 				<?php } ?>
 			@endforeach
 			@foreach($pkms as $pkm)
 				<?php if($semester->id==$pkm->semester_id){ ?>
 					<?php 						
 						if(strpos(($pkm->judul.$pkm->tempat.$pkm->tanggal),$pencarian)){ 
 					?>
 						<h4>Pengabdian Kepada Masyarakat</h4>
 						<a href="/bkd/laporan_kerja/{{$semester->id}}">{{$pkm->judul}}  {{$pkm->tempat}}  {{$pkm->tanggal}}</a>
 					<?php } ?>
 				<?php } ?>
 			@endforeach
 			@foreach($publikasis as $publikasi)
 				<?php if($semester->id==$publikasi->semester_id){ ?>
 					<?php
 						if(strpos(($publikasi->judul.$publikasi->halaman.$publikasi->penulis),$pencarian)){ 
 					?>
 						<h4>Publikasi</h4>
 						<a href="/bkd/laporan_kerja/{{$semester->id}}">{{$publikasi->judul}}  {{$publikasi->halaman}}  {{$publikasi->penulis}}</a>
 					<?php } ?>
 				<?php } ?>
 			@endforeach
 			@foreach($lainlains as $lainlain)
 				<?php if($semester->id==$lainlain->semester_id){ ?>
 					<?php
 						if(strpos(($lainlian->jenis.$lainlain->kategori.$lainlain->keterangan),$pencarian)){ 
 					?>
 						<h4>Lain-lain</h4>
 						<a href="/bkd/laporan_kerja/{{$semester->id}}">{{$lainlain->jenis}}  {{$lainlian->kategori}}  {{$lainlain->keterangan}}</a>
 					<?php } ?>
 				<?php } ?>
 			@endforeach
 			@foreach($files as $file)
 				<?php if($semester->id==$file->semester_id){ ?>
 					<?php
 						if(strpos(($file->nama.$file->filename.$file->keterangan.$file->keterangan),$pencarian)){ 
 					?>
 						<h4>File</h4>
 						<a href="/bkd/laporan_kerja/{{$semester->id}}">{{$file->nama}}  {{$file->filename}}  {{$file->keterangan}}</a>
 					<?php } ?>
 				<?php } ?>
 			@endforeach
 		@endforeach
 	<?php } ?>
 @endsection