@extends('layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Pasien</h4>
        <p class="card-description">
          <a href="/pasien/create" class="btn btn-primary float-end btn-sm" style="margin-right: 10px">+ Tambah</a><br>
        </p>
        {{-- tampilan data pasien pada rute karyawan  --}}
        <div class="table-responsive">
          {{-- table pasien --}}
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  Nama Lengkap
                </th>
                <th>
                    Jenis Kelamin
                </th>
                <th>
                  Kontak
                </th>
                <th>
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($item as $p)
              <tr>
                <td>
                  {{ $p->namaLengkap }}
                </td>
                <td>
                    <?php
                    if ($p->jenisKelamin == 0) {
                        echo "Laki-laki";
                    } else {
                        echo "Perempuan";
                    }
                    ?>
                  </td>
                <td>
                  <i class="menu-icon mdi mdi-phone"></i>
                  {{ $p->noHp }} <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  {{ $p->alamat }}
                </td>
                <td>
                  <form action="/pasien/{{ $p->id }}" method="POST">
                    {{-- Update  --}}
                    <a type="button" href="/pasien/{{ $p->id }}/edit" class="btn btn-warning btn-rounded btn-icon btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
                    @method("delete")
                    @csrf
                    {{-- Delete  --}}
                    <button type="submit" class="btn btn-danger btn-rounded btn-icon btn-sm">
                      <i class="mdi mdi-delete-forever"></i>
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
