@extends('admin/layouts/main')

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
            <h3 style="text-align: center">Tambah Lokasi Gedung</h3>
            <div id="map-admin">
            </div>
                <form action="/tambah-lokasi" method="POST">
                    @csrf
                    {{-- <h3 style="text-align: center">Tambah Lokasi Gedung</h3> --}}
                    {{-- <div class="btn-presensi" style="text-align: center">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i><span>Presensi</span></button>
                    </div> --}}
                    <div class="location" style="text-align: center; align-items:center; justify-content: center">
                        <h5 style="text-align: center; align-items:center; justify-content: center">Nama Gedung:<input name="name" style="border-radius: 5px"></h5>
                        <h5 style="text-align: center; align-items:center; justify-content: center">Latitude: <input name="latitude" style="border: none" disabled="disabled"></h5>
                        <h5 style="text-align: center; align-items:center; justify-content: center">Longitude: <input name="longitude" style="border: none" disabled="disabled"></h5>
                    </div>
                    <div class="btn-presensi" style="text-align: center">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i><span>Tambah Lokasi</span></button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection