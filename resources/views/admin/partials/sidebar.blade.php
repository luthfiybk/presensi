<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="{{ ($title === 'Dashboard') ? 'active' : '' }}">
          <a href="/admin/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
        </li>
        <li class="{{ ($title === 'Register') ? 'active' : '' }}">
          <a href="/register"><i class="fas fa-book"></i> <span>Register</span></a>
        </li>
        <li class="{{ ($title === 'Tambah Lokasi') ? 'active' : '' }}">
          <a href="/admin/tambah-lokasi"><i class="fas fa-location-arrow"></i> <span>Tambah Lokasi</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>