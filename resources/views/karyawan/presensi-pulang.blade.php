
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
                    <form action="/karyawan/presensi/{presensi}" method="POST">
                        @csrf @method('put')
                        <h3 style="text-align: center">Check-Out</h3>
                        <div class="btn-presensi" style="text-align: center">
                            <button class="btn btn-warning" type="submit"><i class="fas fa-paper-plane"></i><span>Pulang</span></button>
                        </div>
                    </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection

