@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')

@stop

 @section('content')
 <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="#tab_1" data-toggle="tab">Profile</a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab">Riwayat Pendidikan</a></li>
            </ul>
            <div class="tab-content col-md-12">
              <div class="tab-pane col-md-12" id="tab_1">
                    <div class="col-md-12 form-group">
                        <div class="col-md-4"></div>
                        <div class="image col-md-4"><div class="col-md-3"></div><img src="{{asset($user->foto)}}" width="150px" height="150px" style="border-radius: 50%"/><div class="col-md-1"></div></div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="register-box-body col-md-4" style="border-radius: 35px; border-color: grey; border-width: 50px">

                            <div class="form-group " style="border-radius: 30px">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                                       placeholder="{{ trans('adminlte::adminlte.full_name') }}" style="border-radius: 15px" disabled>
                            </div>
                            <div class="form-group ">
                                <label>E-Mail</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                       placeholder="{{ trans('adminlte::adminlte.email') }}" style="border-radius: 15px" disabled>
                            </div>
                            <div class="form-group ">
                                <label>Perguruan Tinggi</label>
                                <input type="text" name="perguruan_tinggi" class="form-control" value="{{ $user->perguruan_tinggi }}" 
                                       placeholder="Perguruan Tinggi" style="border-radius: 15px" disabled>
                            </div>
                            <div class="form-group ">
                                <label>NIDN</label>
                                <input type="text" name="nidn" class="form-control" value="{{ $user->nidn }}" 
                                       placeholder="NIDN" style="border-radius: 15px" disabled>
                            </div>
                            <a href="/admin/settingsprofile" class="btn btn-primary form-control" style="border-radius: 15px">Edit</a>                    
                    </div>
                    <div class="col-md-4"></div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_2">
                <div class="card">
 				<div class="card-body">
 					<form action="/riwayatpendidikan/add" method="post">
 						{{ csrf_field() }}
 						<div class="form-group">
 							<label>Gelar : </label>
 							<input type="text" name="gelar" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Perguruan Tinggi : </label>
 							<input type="text" name="pt" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Jurusan</label>
 							<input type="text" name="jurusan" class="form-control">
 						</div>
 						<button type="submit" class="btn btn-primary glyphicon glyphicon-save">Simpan</button>
 					</form>
 				</div>
 				</div>
                 
              </div>              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
 @stop