@extends('layouts.plain')

@section('container')
<div class="login-right-wrap">
  <h1>Login</h1>
  <p class="account-subtitle">Access to our dashboard</p>
  <form action="/" method="POST">
    @csrf
    <div class="form-group">
      <input type="text" name="id_karyawan" id="id_karyawan" placeholder="ID Karyawan" class="form-control"> </div>
    <div class="form-group">
      <input type="password" name="password" id="password" class="form-control" placeholder="Password"> </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
  </form>
</div>
@endsection