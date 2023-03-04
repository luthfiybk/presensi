@extends('karyawan/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header mt-5">
      <div class="row">
        <div class="col">
          <h3 class="page-title">Profile</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tab-content profile-tab-cont">
          <div class="tab-pane fade show active">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title d-flex justify-content-between">
                  <span>Personal Details</span>
                  <a class="edit-link" href="/edit-profilmhs/{{ $karyawan->id }}"></a>
                </h3>
                <div class="row">
                  <p class="col-sm-2 font-weight-bold text-sm-right mb-0 mb-sm-2">Name</p>
                  <p class="col-sm-9">{{$karyawan->nama}}</p>
                </div>
                <div class="row">
                  <p class="col-sm-2 font-weight-bold text-sm-right mb-0 mb-sm-2">ID Karyawan</p>
                  <p class="col-sm-9">{{$karyawan->id_karyawan}}</p>
                </div>
                <div class="row">
                  <p class="col-sm-2 font-weight-bold text-sm-right mb-0 mb-sm-2">Email</p>
                  <p class="col-sm-9">{{$karyawan->email}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
        

    
    
    