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
                <form action="{{ url('admin/tambah-lokasi') }}" method="POST">
                    @csrf
                    <div class="location" style="text-align: center; align-items:center; justify-content: center">
                      <h5 style="text-align: center; align-items:center; justify-content: center">Nama Gedung:<input name="nama" id="nama" required style="border-radius: 5px"></h5>
                    </div>
                    <div id="location" class="location" style="text-align: center; align-items:center; justify-content: center">
                        <input name="latitude" required type="hidden" style="border: none; background-color: #fff" >
                        <input name="longitude" required type="hidden" style="border: none; background-color: #fff">
                    </div>
                    <div class="btn-presensi" style="text-align: center">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i><span>Tambah Lokasi</span></button>
                    </div>
                </form>
                <h3 style="text-align:center">Lokasi yang Telah Terdaftar</h3>
                <table class="datatable table table-stripped">
                  <thead>
                    <tr>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Latitude</th>
                      <th class="text-center">Longitude</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($gedungs as $gedung)
                      <tr>
                        <td class="text-center">{{$gedung->nama}}</td>
                        <td class="text-center">{{$gedung->latitude}}</td>
                        <td class="text-center">{{$gedung->longitude}}</td>
                        <td class="text-center">
                          <i class="fa-solid fa-trash" style="color: #e32400;"></i>
                        </td>
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
@endsection