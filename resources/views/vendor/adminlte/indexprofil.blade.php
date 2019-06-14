@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')

@stop

 @section('content')
 <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Profile</a></li>
              <li><a href="#tab_2" data-toggle="tab">Riwayat Pendidikan</a></li>
            </ul>
            <div class="tab-content col-md-12">
              <div class="tab-pane active col-md-12" id="tab_1">
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
              <div class="tab-pane" id="tab_2">
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
                                    <?php $i++; }   ?>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                 
              </div>              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
 @stop
