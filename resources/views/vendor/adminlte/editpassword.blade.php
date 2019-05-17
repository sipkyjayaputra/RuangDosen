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
            <form action="/admin/settingspassword" method="post">
                {!! csrf_field() !!}

                <div class="form-group ">
                    <input type="password" name="password_lama" class="form-control" placeholder="Password Lama">
                </div>
                <div class="form-group ">
                    <input type="password" name="password_baru" class="form-control" placeholder="Password Baru">
                </div>
                <div class="form-group ">
                    <input type="password" name="retype_password" class="form-control" placeholder="Retype Password">
                </div>
                <input type="hidden" name="id" value="{{auth()->user()->id}}">
                <button type="submit"
                        class="btn btn-primary btn-block"
                >Simpan</button>
            </form>
        </div>
 @stop
