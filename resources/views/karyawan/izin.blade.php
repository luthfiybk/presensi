@extends('karyawan/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header mt-5">
      <div class="row">
        <div class="col">
          <h3 class="page-title">Pengajuan Izin</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/karyawan/riwayat-presensi">Home</a></li>
            <li class="breadcrumb-item active">Pengajuan Izin</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tab-content profile-tab-cont">
          <div class="tab-pane fade show active">
            <div class="card">
              <div class="card-body">
                <form action="/karyawan/pengajuan-izin" method="post" enctype="multipart/form-data">
                  @method('post')
                  @csrf
                  <div class="form-group">
                    <label class="form-label">Jenis Izin</label>
                    <select class="select form-select" name="jenis_izin">
                      <option selected>--Pilih Jenis Izin--</option>
                      <option value="Sakit">Sakit</option>
                      <option value="Izin">Izin</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>File Pengajuan Izin</label>
                    <input type="file" class="form-control" id="file_izin" name="file_izin" >
                  </div>
                  <button class="btn btn-primary" type="submit">Konfirmasi</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection