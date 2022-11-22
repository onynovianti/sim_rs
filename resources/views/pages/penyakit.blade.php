@extends('layout/create')
@section('konten')
<div class="row">
    <div class="col-lg-8 d-flex flex-column">
      <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                  <h4 class="card-title card-title-dash">Cara Penggunaan Fitur Diagnosis</h4>
                 <p class="card-subtitle card-subtitle-dash">Berikut langkah-langkahnya</p><br>
                 <ul>
                    <ol>1. Tekan tombol "Tambah Gejala" yang terletak di sebelah kanan atas</ol><br>
                    <ol>2. Anda bisa memilih daftar gejala yang ada atau dengan melakuka pencarian pada kolom Search</ol><br>
                    <ol>3. Klik gejala yang sesuai, kemudian pilih atau masukkan nilai untuk gejala tersebut, sebagai contoh: Age(Umur) dengan nilai 30</ol><br>
                    <ol>4. Setelah menambahkan nilai pada gejala yang dialami Pasien, tekan tombol "Tambahkan"</ol><hr>
                    Keterangan : <br><br>
                    <b>Anda dapat memasukkan >1 gejala sesuai dengan kondisi pasien</b>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="col-lg-4 d-flex flex-column">
      <div class="row flex-grow">
        <div class="col-md-6 col-lg-12 grid-margin">
            <a href="/add_sakit" class="btn btn-primary btn-block">Mulai Diagnosa</a>
        </div>
      </div>
    </div>
  </div>
@endsection