@extends('layouts.main')

@section('container')
<div class="page-wrapper">
  <div class="login-right-wrap">
    <div class="content container-fluid">
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <div class="mt-5">
                <h3 class="page-title">Tambah User</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control " id="name" placeholder="Nama" required value="{{ old('name') }}"> 
                </div>
                <div class="form-group">
                  <input type="text" name="id_karyawan" class="form-control " id="id_karyawan" placeholder="ID Karyawan" required value="{{ old('id_karyawan') }}"> 
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control " id="email" placeholder="example@email.com" required value="{{ old('email') }}"> 
                </div>
                <div class="form-group">
                  <select class="form-control" name="role" id="role">
                    <option value="">--Select Role--</option>
                    <option value="admin">Admin</option>
                    <option value="karyawan">Karyawan</option>
                  </select> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control " id="password" name="password" placeholder="Password" required> 
                </div>
                <div class="form-group mb-0">
                  <button class="btn btn-primary btn-block" type="submit">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>  
      </div>  
    </div>
  </div>
</div>
@endsection