<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>{{$title}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.ptppi.co.id/wp-content/uploads/2022/01/PPI-ID-Food.png" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}" />
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
  </head>

  <body>
    @include('sweetalert::alert')
    <div class="main-wrapper">
      <div class="header">
        <div class="header-left">
          <a href="/karyawan/riwayat-presensi" class="logo"> <img src="https://www.ptppi.co.id/wp-content/uploads/2022/01/PPI-ID-Food.png" width="50" height="70" alt="logo" /> <span class="logoclass"></span> </a>
          <a href="/karyawan/riwayat-presensi" class="logo logo-small"> <img src="https://www.ptppi.co.id/wp-content/uploads/2022/01/PPI-ID-Food.png" alt="Logo" width="30" height="30" /> </a>
        </div>
        <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
        <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
        <ul class="nav user-menu">
          <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              @if (Auth::user()->photo == null)
                <span class="user-img"><img class="rounded-circle" src="{{ asset('assets/img/profiles/user-avatar.png') }}" width="31" alt="Avatar" /></span> 
              @else
                <span class="user-img"><img class="rounded-circle" src="{{ asset('img/photo/'.Auth::user()->photo) }}" width="31" alt="Avatar" /></span>
              @endif
              <span>{{ auth()->user()->name }}</span>
              <span class="text-muted mb-0">Karyawan</span>
            </a>
            <div class="dropdown-menu">
              <form action="/logout" method="POST" class="m-3">
                <a class="dropdown-item ml-0 mt-1" href="/karyawan/profil">My Profile</a>
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </div>
          </li>
        </ul>
      </div>
      @include('karyawan/partials/sidebar')
      @yield('container')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('app.google_maps_api_key') }}&callback=initMap&v=weekly" defer></script>

    <script src="{{ asset('assets/js/module/geopresensi.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
  </body>
</html>