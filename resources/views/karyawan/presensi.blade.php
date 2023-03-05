
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
            <div id="map-presensi">
            </div>
            <!-- @if(strtotime('now') >= strtotime(config('absensi.jam_masuk')) && strtotime(date('H:i:s')) <= strtotime(config('absensi.jam_pulang'))) -->
                <form action="/presensi" method="POST">
                    @csrf
                    <h3 style="text-align: center">Presensi</h3>
                    <div class="btn-presensi" style="text-align: center">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i><span>Presensi</span></button>
                    </div>
                    <div class="location" style="text-align: center">
                        <h5 style="text-align: center">Latitude: <input name="latitude" style="border: none" disabled="disabled"></h5>
                        <h5 style="text-align: center">Longitude: <input name="longitude" style="border: none" disabled="disabled"></h5>
                    </div>
                </form>
            <!-- @elseif(strtotime('now') >= strtotime(config('absensi.jam_pulang')))
                    <form action="/presensi/{presensi}" method="POST">
                        @csrf @method('patch')
                        <h3 style="text-align: center">Check-Out</h3>
                        <div class="btn-presensi" style="text-align: center">
                            <button class="btn btn-warning" type="submit"><i class="fas fa-paper-plane"></i><span>Pulang</span></button>
                        </div>
                    </form>
            @endif -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

