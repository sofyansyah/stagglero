@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img src="{{asset('img/avatar/'.$user->avatar)}}" class="img-circle" height="150px" width="150px;" style="top:10;">
                <h1>{{$user->name}}</h1>
            <form action="{{url('profile/'.$user->id.'/edit')}}" method="POST" style="text-align: left!important;" enctype="multipart/form-data">
            {{csrf_field()}}
             <div class="form-group">
                <label>Nama Lengkap </label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{$user->name}}">
              </div>
              <div class="form-group">
                <label>Email </label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
              </div>
              <div class="form-group">
                <label>Username </label>
                <input type="text" name="username" class="form-control" placeholder="Username" value="{{$user->username}}" required>
              </div>
              <div class="form-group">
                <label>Password </label>
                <input type="password" name="password" class="form-control" placeholder="Password" value="{{$user->password}}" required>
              </div>
              <div class="form-group">
                <label>Bio </label>
                <input type="text" name="bio" class="form-control" placeholder="Bio" value="{{$user->bio}}">
              </div>
              <div class="form-group">
                <label>Alamat </label>
                <textarea name="alamat" cols="30" rows="10" class="form-control" placeholder="Alamat">{{$user->alamat}}</textarea>
              </div>
              <div class="form-group">
                <label>Facebook </label>
                <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="{{$user->facebook}}">
              </div>
              <div class="form-group">
                <label>Twitter </label>
                <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="{{$user->twitter}}">
              </div>
              <div class="form-group">
                <label>Instagram </label>
                <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="{{$user->instagram}}">
              </div>
              <div class="form-group">
                <label>Avatar </label>
                <input type="file" name="foto" class="form-control">
              </div>
              <button class="btn btn-warning">Edit</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection