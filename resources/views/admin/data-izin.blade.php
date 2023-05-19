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
              <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
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
            <ul class="nav nav-tabs nav-tabs-solid nav-justified">
              <li class="nav-item"><a class="nav-link {{ (request('id') === 'unverified') ? 'active' : '' }}" href="/admin/data-izin?id=unverified" >Belum Diverifikasi</a></li>
              <li class="nav-item"><a class="nav-link {{ (request('id') === 'tdksetuju') ? 'active' : '' }}" href="/admin/data-izin?id=tdksetuju" >Izin Tidak Disetujui</a></li>
              <li class="nav-item"><a class="nav-link {{ (request('id') === 'setuju') ? 'active' : '' }}" href="/admin/data-izin?id=setuju" >Izin Disetujui</a></li>
            </ul>
            <div class="table-responsive">
              <table class="datatable table table-stripped">
                <thead>
                  <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">ID Karyawan</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Jenis Izin</th>
                    <th class="text-center">Status Izin</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @if(request('id') == 'unverified')
                    @foreach($izins as $izin)
                      @if($izin->stts_izin == 'Belum Diverifikasi')
                        <tr>
                          <td class="text-center"> 
                            <h2 class="table-avatar">
                              <a>{{$izin->nama_karyawan}}</a>
                            </h2>
                          </td>
                          <td class="text-center">{{$izin->id_karyawan}}</td>
                          <td class="text-center">{{$izin->tanggal}}</td>
                          <td class="text-center">{{$izin->jenis_izin}}</td>
                          <td class="text-center">{{$izin->stts_izin}}</td>
                          <td style="text-align: center">
                            <a href="/admin/data-izin/{{$izin->id}}" class="btn btn-warning">Lihat Detail</a>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  @elseif(request('id') == 'tdksetuju')
                    @foreach($izins as $izin)
                      @if($izin->stts_izin == 'Izin Tidak Disetujui')
                        <tr>
                          <td class="text-center"> 
                            <h2 class="table-avatar">
                              <a>{{$izin->nama_karyawan}}</a>
                            </h2>
                          </td>
                          <td class="text-center">{{$izin->id_karyawan}}</td>
                          <td class="text-center">{{$izin->tanggal}}</td>
                          <td class="text-center">{{$izin->jenis_izin}}</td>
                          <td class="text-center">{{$izin->stts_izin}}</td>
                          <td style="text-align: center">
                            <a href="/admin/data-izin/{{$izin->id}}" class="btn btn-warning">Lihat Detail</a>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  @elseif(request('id') == 'setuju')
                    @foreach($izins as $izin)
                      @if($izin->stts_izin == 'Izin Disetujui')
                        <tr>
                          <td class="text-center"> 
                            <h2 class="table-avatar">
                              <a>{{$izin->nama_karyawan}}</a>
                            </h2>
                          </td>
                          <td class="text-center">{{$izin->id_karyawan}}</td>
                          <td class="text-center">{{$izin->tanggal}}</td>
                          <td class="text-center">{{$izin->jenis_izin}}</td>
                          <td class="text-center">{{$izin->stts_izin}}</td>
                          <td style="text-align: center">
                            <a href="/admin/data-izin/{{$izin->id}}" class="btn btn-warning">Lihat Detail</a>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  @endif
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