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
              <li class="breadcrumb-item"></li>
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
                    <th>No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">ID Karyawan</th>
                    <th>Tanggal</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($presensis as $presensi)
                    <tr>
                     <td>{{$presensi->id_presensi}}</td>
                      <td>
                        <h2 class="table-avatar">
                          <a>{{$presensi->nama}}</a>
                        </h2>
                      </td>
                      <td class="text-center">{{$presensi->id_karyawan}}</td>
                      <td>{{$presensi->tanggal}}</td>
                      <td>{{$presensi->jam_msk}}</td>
                      <td>{{$presensi->jam_klr}}</td>
                      <td>{{$presensi->latitude}}</td>
                      <td>{{$presensi->longitude}}</td>
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