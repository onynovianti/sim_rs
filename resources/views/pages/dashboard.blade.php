<!DOCTYPE html>
<html lang="en">

<head>
  @include('include/head')
</head>
<body>
  <div class="container-scroller">
    @include('include/navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('include/settings')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('include/_sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" id="body">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs no-print" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link">Dashboard</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#pasien" role="tab" aria-selected="false">Pasien</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#pengguna" role="tab" aria-selected="false">Pengguna</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#obat" role="tab" aria-selected="false">Obat</a>
                    </li>
                    <li class="nav-item" style="display: none">
                      <a class="nav-link" id="more-tab" data-bs-toggle="tab" href="#transaksi" role="tab" aria-selected="false">Transaksi</a>
                    </li> --}}
                  </ul>
                  <div>
                    <div class="btn-wrapper no-print">
                      <a onclick="window.print()" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <button id="export" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</button>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  {{-- PASIEN  --}}
                  <div class="tab-pane fade show active" id="pasien" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12 no-print">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Administrator</p>
                            <h3 class="rate-percentage">{{ $jml_admin }}</h3>
                            {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>Orang</span></p> --}}
                          </div>
                          <div>
                            <p class="statistics-title">Apoteker</p>
                            <h3 class="rate-percentage">{{ $jml_apoteker }}</h3>
                            {{-- <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p> --}}
                          </div>
                          <div>
                            <p class="statistics-title">Dokter</p>
                            <h3 class="rate-percentage">{{ $jml_dokter }}</h3>
                            {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> --}}
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Karyawan</p>
                            <h3 class="rate-percentage">{{ $jml_karyawan }}</h3>
                            {{-- <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p> --}}
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Pasien Terdaftar</p>
                            <h3 class="rate-percentage">{{ $jml_pasien }}</h3>
                            {{-- <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p> --}}
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Jumlah Transaksi</p>
                            <h3 class="rate-percentage">{{ $jml_transaksi }}</h3>
                            {{-- <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p> --}}
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Pendaftaran Pasien</h4>
                                   <p class="card-subtitle card-subtitle-dash">Grafik Pendaftaran Pasien Berdasarkan Tahun</p>
                                  </div>
                                  <div>
                                    {{-- <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This Year </button>
                                      <select class="form-select" id="chartchange">
                                        <option href="#" selected value="year">This Year</option>
                                        <option href="#" value="month">This Month</option>
                                        <option href="#" value="week">This Week</option>
                                      </select>
                                    </div>  --}}
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">{{ $jml_pasien }} Pasien</h2><h4 class="me-2"></h4><h4 class="text-success"></h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="barchart"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Kesimpulan</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1">Jumlah Pasien Terdaftar</p>
                                    <h2 class="text-info">{{ $jml_pasien }}</h2>
                                  </div>
                                  {{-- <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                      <canvas id="status-summary"></canvas>
                                    </div>
                                  </div> --}}
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        {{-- <div id="totalVisitors" class="progressbar-js-circle pr-2"></div> --}}
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Laki-laki</p>
                                        <h4 class="mb-0 fw-bold">{{ $pasien_laki }}</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        {{-- <div id="visitperday" class="progressbar-js-circle pr-2"></div> --}}
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Perempuan</p>
                                        <h4 class="mb-0 fw-bold">{{ $pasien_wanita }}</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- END PASIEN  --}}
                  {{-- PENGGUNA  --}}
                  <div class="" id="obat" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Penyediaan Obat</h4>
                                   <p class="card-subtitle card-subtitle-dash">Grafik Penyediaan Obat Berdasarkan Tahun</p>
                                  </div>
                                  <div>
                                    {{-- <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This Year </button>
                                      <select class="form-select" id="chartchange">
                                        <option href="#" selected value="year">This Year</option>
                                        <option href="#" value="month">This Month</option>
                                        <option href="#" value="week">This Week</option>
                                      </select>
                                    </div>  --}}
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">{{ $jml_obat }} Jenis Obat</h2><h4 class="me-2"></h4><h4 class="text-success"></h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend1"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="barchartobat"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Kesimpulan</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1">Jumlah Jenis Obat Terdaftar</p>
                                    <h2 class="text-info">{{ $jml_obat }}</h2>
                                  </div>
                                  {{-- <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                      <canvas id="status-summary"></canvas>
                                    </div>
                                  </div> --}}
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        {{-- <div id="totalVisitors" class="progressbar-js-circle pr-2"></div> --}}
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Jumlah jenis obat diatas 50</p>
                                        <h4 class="mb-0 fw-bold">{{ $obat_diatas }}</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        {{-- <div id="visitperday" class="progressbar-js-circle pr-2"></div> --}}
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Jumlah jenis obat dibawah 50</p>
                                        <h4 class="mb-0 fw-bold">{{ $obat_dibawah }}</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- END PENGGUNA  --}}
                  {{-- TRANSAKSI  --}}
                  <div class="" id="transaksi" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Transaksi Dilakukan</h4>
                                   <p class="card-subtitle card-subtitle-dash">Grafik Transaksi Berdasarkan Tahun</p>
                                  </div>
                                  <div>
                                    {{-- <div class="dropdown">
                                      <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This Year </button>
                                      <select class="form-select" id="chartchange">
                                        <option href="#" selected value="year">This Year</option>
                                        <option href="#" value="month">This Month</option>
                                        <option href="#" value="week">This Week</option>
                                      </select>
                                    </div>  --}}
                                  </div>
                                </div>
                                <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                  <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">{{ $jml_transaksi }} Transaksi</h2><h4 class="me-2"></h4><h4 class="text-success"></h4></div>
                                  <div class="me-3"><div id="marketing-overview-legend2"></div></div>
                                </div>
                                <div class="chartjs-bar-wrapper mt-3">
                                  <canvas id="barcharttransaksi"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-white mb-4">Kesimpulan</h4>
                                <div class="row">
                                  <div class="col-sm-4">
                                    <p class="status-summary-ight-white mb-1">Jumlah Transaksi</p>
                                    <h2 class="text-info">{{ $jml_transaksi }}</h2>
                                  </div>
                                  {{-- <div class="col-sm-8">
                                    <div class="status-summary-chart-wrapper pb-4">
                                      <canvas id="status-summary"></canvas>
                                    </div>
                                  </div> --}}
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        {{-- <div id="totalVisitors" class="progressbar-js-circle pr-2"></div> --}}
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Jumlah transaksi terverifikasi</p>
                                        <h4 class="mb-0 fw-bold">{{ $transaksi_berhasil }}</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        {{-- <div id="visitperday" class="progressbar-js-circle pr-2"></div> --}}
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Jumlah transaksi belum terverifikasi</p>
                                        <h4 class="mb-0 fw-bold">{{ $transaksi_pending }}</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- END Transaksi  --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('include/footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  {{-- LOADED SCRIPT --}}
  @include('include/foot')
  <!-- End custom js for this page-->
</body>

</html>

