@extends('adminlte::page')

@section('title', "AdminLTE")

@section('content_header')
    <h1>Edit Profile</h1>

@stop

 @section('content')
        <div class="col-md-12 form-group">
            <div class="col-md-4"></div>
            <div class="image col-md-4"><div class="col-md-4"></div><img src="{{asset($user->foto)}}" width="150px" height="150px" style="border-radius: 50%"/></div>
            <div class="col-md-4"></div>
        </div>
        <div class="col-md-4"></div>
        <div class="register-box-body col-md-4" style="border-radius: 35px">
            <form action="/admin/settingspassword" method="post">
                {!! csrf_field() !!}

                <div class="form-group ">
                    <input type="password" name="password_lama" class="form-control" placeholder="Password Lama" style="border-radius: 15px">
                </div>
                <div class="form-group ">
                    <input type="password" name="password_baru" class="form-control" placeholder="Password Baru" style="border-radius: 15px">
                </div>
                <div class="form-group ">
                    <input type="password" name="retype_password" class="form-control" placeholder="Retype Password" style="border-radius: 15px">
                </div>
                <input type="hidden" name="id" value="{{auth()->user()->id}}">
                <button type="submit"
                        class="btn btn-primary btn-block" style="border-radius: 15px"
                >Simpan</button>
            </form>
        </div>
        <div class="col-md-4"></div>
 @stop
