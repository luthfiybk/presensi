<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="{{ ($title === 'Dashboard') ? 'active' : '' }}">
          <a href="/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
        </li>
        <li class="{{ ($title === 'Register') ? 'active' : '' }}">
          <a href="/register"><i class="fas fa-book"></i> <span>Register</span></a>
        </li>
        <li class="{{ ($title === 'Tambahkan Lokasi') ? 'active' : '' }}">
          <a href="/tambah-lokasi"><i class="fas fa-location-arrow"></i> <span>Tambahkan Lokasi</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>