<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="{{ ($title === 'Presensi') ? 'active' : '' }}">
          <a href="/karyawan/presensi"><i class="fas fa-paper-plane"></i> <span>Presensi</span></a>
        </li>
        <li class="{{ ($title === 'Riwayat Presensi') ? 'active' : '' }}">
          <a href="/karyawan/riwayat-presensi"><i class="fas fa-tachometer-alt"></i> <span>Riwayat Presensi</span></a>
        </li>
        <li class="{{ ($title === 'Detail Profil') ? 'active' : '' }}">
          <a href="/karyawan/profil"><i class="far fa-user-circle"></i> <span>Detail Profil</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>