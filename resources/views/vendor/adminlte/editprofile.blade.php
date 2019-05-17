@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
    <h1>Edit Profile</h1>

@stop

 @section('content')
        <div class="col-md-12 form-group">
            <div class="col-md-4"></div>
            <div class="image"><img src="{{asset($user->foto)}}" width="150px" height="150px" style="border-radius: 50%"/></div>
            <div class="col-md-4"></div>
        </div>
        <div class="register-box-body col-md-12">
            <form action="/admin/settingsprofile" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <div class="form-group ">
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                </div>
                <div class="form-group ">
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                </div>
                <div class="form-group ">
                    <input type="text" name="perguruan_tinggi" class="form-control" value="{{ $user->perguruan_tinggi }}" 
                           placeholder="Perguruan Tinggi">
                </div>
                <div class="form-group ">
                    <input type="text" name="nidn" class="form-control" value="{{ $user->nidn }}" 
                           placeholder="NIDN">
                </div>                     
                <div class="form-group">
                    Foto : <input type="file" name="foto" class="">{{ $user-> foto }}
                </div>
                <input type="hidden" name="id" value="{{auth()->user()->id}}">
                <button type="submit"
                        class="btn btn-primary btn-block"
                >Simpan</button>
            </form>
        </div>
 @stop
