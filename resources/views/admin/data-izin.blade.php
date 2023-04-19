@extends('admin/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Data Pengajuan Izin</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"></li>
              <li class="breadcrumb-item active">Data Pengajuan Izin</li>
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
                    <th>Jenis Izin</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($izins as $izin)
                    <tr>
                     <td>{{$izin->id_izin}}</td>
                      <td>
                        <h2 class="table-avatar">
                          <a>{{$izin->nama}}</a>
                        </h2>
                      </td>
                      <td class="text-center">{{$izin->id_karyawan}}</td>
                      <td>{{$izin->tanggal}}</td>
                      <td>{{$izin->jenis_izin}}</td>
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