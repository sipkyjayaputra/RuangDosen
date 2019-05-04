@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
	<h1>Semester</h1>
	@stop

@section('content')
					<a href="/bkd/semesterNew" class="btn btn-primary">Buat Semester</a>
					<table class="table table-striped">
						<tr>
							<th>Semester</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						@foreach($semesters as $semester)
						<?php if($semester->user_id == auth()->user()->id){ ?>
						<tr>
							<td>{{ $semester->keterangan }}</td>
							<td>{{ $semester->status == 1?'Completed':'Incompleted'}}</td>
							<td class="col-sm-6">
								<a class="btn btn-secondary btn-sm col-sm-2"  href="/bkd/semesterEdit/{{ $semester->id }}">Edit</a> 
								<form action="/bkd/semesterDelete/{{$semester->id}}" method="post">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm col-sm-2" >Hapus</button>
								</form> 
								<a class="btn btn-primary btn-sm col-sm-2"  href="/bkd/laporan_kerja/{{ $semester->id }}">view</a>
							</td>
						</tr>
					<?php } ?>
						@endforeach
					</table>
@stop 