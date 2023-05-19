@extends('admin/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Data Presensi</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Presensi</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="datatable table table-stripped">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">ID Karyawan</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Jam Masuk</th>
                    <th class="text-center">Jam Keluar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($presensis as $presensi)
                    <tr>
                      <td class="text-center">{{$presensi->id}}</td>
                      <td class="text-center">
                        <h2 class="table-avatar">
                          <a>{{$presensi->nama}}</a>
                        </h2>
                      </td>
                      <td class="text-center">{{$presensi->id_karyawan}}</td>
                      <td class="text-center">{{$presensi->tanggal}}</td>
                      <td class="text-center">{{$presensi->jam_msk}}</td>
                      <td class="text-center">{{$presensi->jam_klr}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection