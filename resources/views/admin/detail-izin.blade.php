@extends('admin/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Verification</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Verification</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-3">
              <span>Detail Izin</span>
            </h4>
            @foreach($izins as $izin)
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>ID Karyawan</label>
                  <p class="col-sm-9">{{$izin->id_karyawan}}</p>
                </div>
                <div class="form-group">
                  <label>Nama Karyawan</label>
                  <p class="col-sm-9">{{$izin->nama_karyawan}}</p>
                </div>
                <div class="form-group">
                  <label>Jenis Izin</label>
                  <p class="col-sm-9">{{$izin->jenis_izin}}</p>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <p class="col-sm-9">{{$izin->tanggal}}</p>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <p class="col-sm-9">{{$izin->stts_izin}}</p>
                </div>
              </div>
            </div>
            <h4 class="card-title mb-3">File</h4>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label>File Izin: 
                      <a href="{{ asset('storage/file_izin/'.$izin->file_izin) }}" style="text-decoration: none" target="_blank">Check</a>
                    </label>
                  </div>
              </div>
            </div>
            @csrf @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                    <a href="{{ route('verified', $izin->id) }}" style="btn btn-primary" type="submit">
                                        <button class="btn btn-primary">
                                            Setujui
                                        </button>
                                    </a>
                                    <a href="{{ route('unverified', $izin->id) }}" style="btn btn-alert" type="submit">
                                        <button class="btn btn-warning">
                                            Tidak Disetujui
                                        </button>
                                    </a>
                            </div>
                        </div>
                    </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  
</script>
@endsection
