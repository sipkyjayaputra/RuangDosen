@extends('layouts.app')

@section('content')
					<a href="/bkd/semesterNew" class="btn btn-primary">Buat Semester</a>
					<table class="table table-striped">
						<tr>
							<th>Semester</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						@foreach($semesters as $semester)
						<tr>
							<td>{{ $semester->keterangan }}</td>
							<td>{{ $semester->status == 1?'Completed':'Incompleted'}}</td>
							<td>
								<a class="btn btn-secondary btn-sm" href="/bkd/semesterEdit/{{ $semester->id }}">Edit</a>
								<form action="/bkd/semesterDelete/{{$semester->id}}" method="post">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
								</form>
								<a class="btn btn-primary btn-sm" href="/bkd/laporan_kerja/{{ $semester->id }}">view</a>
							</td>
						</tr>
						@endforeach
					</table>
@endsection