@extends('admin/layouts/main')

@section('container')
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row align-items-center">
        <div class="col">
          <div class="mt-5">
            <h3 class="page-title">Data User</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
                <table class="datatable table table-stripped">
                        <tr>
                            <td style="text-align: right">
                                <a href="/register" class="btn btn-warning">Tambah User</a>
                            </td>
                        </tr>
                </table>
            <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                <li class="nav-item"><a class="nav-link {{ (request('id') === 'karyawan') ? 'active' : '' }}" href="/admin/data-user?id=karyawan" >Karyawan</a></li>
                <li class="nav-item"><a class="nav-link {{ (request('id') === 'admin') ? 'active' : '' }}" href="/admin/data-user?id=admin" >Admin</a></li>
            </ul>
            <div class="table-responsive">
              <table class="datatable table table-stripped">
                <thead>
                  <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">ID Karyawan</th>
                    <th class="text-center">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @if(request('id') == 'karyawan')
                        @foreach ($users as $user)
                            @if ($user->role == 'karyawan')
                                <tr>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <td class="text-center">{{ $user->id_karyawan }}</td>
                                    <td class="text-center">{{ $user->email }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @elseif(request('id') == 'admin')
                        @foreach($users as $user)
                            @if ($user->role == 'admin')
                                <tr>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <td class="text-center">{{ $user->id_karyawan }}</td>
                                    <td class="text-center">{{ $user->email }}</td>
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
        

    
    
    