@extends('layouts.app')

@section('content')
<div class="containet">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Ubah Semester</div>
				<div class="card-body">
					<form action="{{ url('/bkd/semesterEdit/' . $semester->id) }}" method="post">
						{{ csrf_field()  }}
						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" name="keterangan" value="{{$semester->keterangan}}" class="form-control">
						</div>
						<input type="hidden" name="status" value="{{$semester->status}}" >
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection