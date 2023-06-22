
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
                <form action="/karyawan/presensi" method="POST">
                    @csrf
                    <h3 style="text-align: center">Presensi</h3>
                    <div class="btn-presensi" style="text-align: center">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i><span>Presensi</span></button>
                    </div>
                    <div class="location" style="text-align: center">
                        <input name="id_karyawan" type="hidden" required style="border: none; background-color: #fff">
                        <input name="latitude" type="hidden" required style="border: none; background-color: #fff">
                        <input name="longitude" type="hidden" required style="border: none; background-color: #fff">
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

