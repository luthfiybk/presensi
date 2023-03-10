@extends('karyawan/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <h3 style="text-align: center">Riwayat Presensi</h3>
            <div class="table-responsive">
              <table class="datatable table table-stripped">
                <thead>
                  <tr>
                    <td class="text-center">Tanggal</td>
                    <td class="text-center">Jam Masuk</td>
                    <td class="text-center">Jam Keluar</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($presensis as $presensi)
                    <tr>
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
        

    
    
    