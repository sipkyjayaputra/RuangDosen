
@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Riwayat Pendidikan</h1>
@stop

@section('content')

						<div class="card panel panel-info">
							<div class="card-header panel-heading">
								<a href="/riwayatpendidikan/add" class="btn btn-primary btn-sm" style="border-radius: 60px">+</a>
							</div>
							<div class="card-body panel-body">
								<table class="table table-striped">
									<tr>
										<th>No.</th>
										<th>Gelar</th>
										<th>Perguruan Tinggi</th>
										<th>Jurusan</th>
										<th>Tindakan</th>
									</tr>
									@foreach($riwayats as $riwayat)
									<?php if($riwayat->user_id == auth()->user()->id){ $i=1; ?>
									<tr>
										<td>{{ $i }}</td>
										<td>{{ $riwayat->gelar }}</td>
										<td>{{ $riwayat->perguruan_tinggi }}</td>
										<td>{{ $riwayat->jurusan }}</td>
										<td class="col-sm-6">
											<a class="btn btn-primary btn-sm col-sm-2" href="/riwayatpendidikan/edit/{{$riwayat->id}}">Edit</a>
											<form action="/riwayatpendidikan/delete/{{$riwayat->id}}" method="post" >
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<button type="submit" class="btn btn-danger btn-sm col-sm-2">Hapus</button>
											</form> 
										</td>
									</tr>
									<?php $i++; }	?>
									@endforeach
								</table>
							</div>
						</div>


@stop