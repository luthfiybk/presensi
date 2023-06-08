@extends('karyawan/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Riwayat Presensi</h3>
            <ul class="breadcrumb">
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
                    <td class="text-center">Tanggal</td>
                    <td class="text-center">Jam Masuk</td>
                    <td class="text-center">Jam Keluar</td>
                    <td class="text-center">Latitude</td>
                    <td class="text-center">Longitude</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($presensis as $presensi)
                    <tr>
                      <td class="text-center">{{$presensi->tanggal}}</td>
                      <td class="text-center">{{$presensi->jam_msk}}</td>
                      <td class="text-center">{{$presensi->jam_klr}}</td>
                      <td class="text-center">{{$presensi->latitude}}</td>
                      <td class="text-center">{{$presensi->longitude}}</td>
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
        

    
    
    