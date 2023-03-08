
@extends('karyawan/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div id="map-presensi">
            </div>
            @if(strtotime('now') >= strtotime(config('absensi.jam_masuk')) && strtotime(date('H:i:s')) <= strtotime(config('absensi.jam_pulang')))
                <form action="/karyawan/presensi" method="POST">
                    @csrf
                    <h3 style="text-align: center">Presensi</h3>
                    <div class="btn-presensi" style="text-align: center">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i><span>Presensi</span></button>
                    </div>
                    <div class="location" style="text-align: center">
                        <input name="latitude" type="hidden" required style="border: none; background-color: #fff">
                        <input name="longitude" type="hidden" required style="border: none; background-color: #fff">
                    </div>
                </form>
            @elseif(strtotime('now') >= strtotime(config('absensi.jam_pulang')))
                    <form action="/karyawan/presensi/{presensi}" method="POST">
                        @csrf @method('patch')
                        <h3 style="text-align: center">Check-Out</h3>
                        <div class="btn-presensi" style="text-align: center">
                            <button class="btn btn-warning" type="submit"><i class="fas fa-paper-plane"></i><span>Pulang</span></button>
                        </div>
                    </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

