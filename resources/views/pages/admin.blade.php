@extends('layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Administrator</h4>
        <p class="card-description">
        </p>
        <a href="/admin/create">+ Tambah</a>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  Nama Lengkap
                </th>
                <th>
                  Username
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
              @foreach ($item as $i)
              <tr>
                <td>
                  {{ $i->namaLengkap }}
                </td>
                <td>
                  {{ $i->username }}
                </td>
                <td>
                  <i class="menu-icon mdi mdi-phone"></i>
                  {{ $i->noHp }} <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  {{ $i->alamat }}
                </td>
                <td>
                  <button type="button" class="btn btn-warning btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-lead-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-delete-forever"></i>
                  </button>
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