<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>{{$title}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://admintokopangan.ptppi.co.id/images/bumnu.png" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}" />
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
  </head>

  <body>
    <div class="main-wrapper">
      <div class="header">
        <div class="header-left">
          <a href="/dashboardkar" class="logo"> <img src="https://admintokopangan.ptppi.co.id/images/bumnu.png" width="50" height="70" alt="logo" /> <span class="logoclass">SPK</span> </a>
          <a href="/dashboardkar" class="logo logo-small"> <img src="https://admintokopangan.ptppi.co.id/images/bumnu.png" alt="Logo" width="30" height="30" /> </a>
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
            </a>
            <div class="dropdown-menu">
              <div class="user-header">
                <div class="avatar avatar-sm"><img src="{{ asset('assets/img/profiles/user-avatar.png') }}" alt="User Image" class="avatar-img rounded-circle" /></div>
                <div class="user-text">
                  <h6>{{ auth()->user()->name }}</h6>
                  <p class="text-muted mb-0">Karyawan</p>
                </div>
              </div>
              <a class="dropdown-item ml-3 mt-1" href="/profil">My Profile</a>
              <form action="/logout" method="POST" class="m-3">
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
    
    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>
    <script src="{{ asset('assets/js/module/geopresensi.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/chart.morris.js') }}"></script> --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
  </body>
</html>