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

 @endsection