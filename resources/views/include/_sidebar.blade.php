<nav class="sidebar sidebar-offcanvas no-print" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('dashboard')}}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category" {{ (session('role')=="admin")? "style=display:block" : "style=display:none" }} >Administrator</li>
      <li class="nav-item" {{ (session('role')=="admin")? "style=display:block" : "style=display:none" }}>
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" {{ (session('role')=="admin")? "aria-expanded=true" : "aria-expanded=false" }} aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-account-multiple"></i>
          <span class="menu-title">Pengguna</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ (session('role')=="admin")? "show" : "" }}" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('admin')}}">Administrator</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('apoteker')}}">Apoteker</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('dokter')}}">Dokter</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('karyawan')}}">Karyawan</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category" {{ (session('role')=="apoteker")? "style=display:block" : "style=display:none" }}>Apoteker</li>
      <li class="nav-item" {{ (session('role')=="apoteker")? "style=display:block" : "style=display:none" }}>
        <a class="nav-link" href="/obat">
          <i class="menu-icon mdi mdi-pill"></i>
          <span class="menu-title">Obat</span>
        </a>
      </li>
      <li class="nav-item nav-category" {{ (session('role')=="dokter")? "style=display:block" : "style=display:none" }}>Dokter</li>
      <li class="nav-item" {{ (session('role')=="dokter")? "style=display:block" : "style=display:none" }}>
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" {{ (session('role')=="dokter")? "aria-expanded=true" : "aria-expanded=false" }} aria-controls="auth">
          <i class="menu-icon mdi mdi-stethoscope"></i>
          <span class="menu-title">Diagnosis</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ (session('role')=="dokter")? "show" : "" }} " id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/penyakit"> Petunjuk Penggunaan </a></li>
            <li class="nav-item"> <a class="nav-link" href="/diagnosa/select">Pasien</a></li>
            <li class="nav-item"> <a class="nav-link" href="/add_sakit"> Penyakit </a></li>
            <li class="nav-item"> <a class="nav-link" href="/diagnosa">Rekam Medis</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category" {{ (session('role')=="karyawan")? "style=display:block" : "style=display:none" }}>Karyawan</li>
      <li class="nav-item" {{ (session('role')=="karyawan")? "style=display:block" : "style=display:none" }}>
        <a class="nav-link" data-bs-toggle="collapse" href="#pasien" {{ (session('role')=="karyawan")? "aria-expanded=true" : "aria-expanded=false" }} aria-controls="pasien">
          <i class="menu-icon mdi mdi-account-card-details"></i>
          <span class="menu-title">Pasien</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ (session('role')=="karyawan")? "show" : "" }}" id="pasien">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/pasien"> Data Pasien </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item" {{ (session('role')=="karyawan")? "style=display:block" : "style=display:none" }}>
        <a class="nav-link" data-bs-toggle="collapse" href="#transaksi" aria-expanded="false" aria-controls="transaksi">
          <i class="menu-icon mdi mdi-cash-multiple"></i>
          <span class="menu-title">Transaksi</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="transaksi">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/transaksi"> Transaksi </a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
