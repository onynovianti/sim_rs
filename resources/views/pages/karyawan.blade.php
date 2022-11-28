@extends('layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Karyawan</h4>
        <p class="card-description">
          <a href="/karyawan/create" class="btn btn-primary float-end btn-sm" style="margin-right: 10px">+ Tambah</a><br>
        </p>
        {{-- tampilan data karyawan  --}}
        <div class="table-responsive">
          {{-- table karyawan --}}
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
              @foreach ($item as $k)
              <tr>
                <td>
                  {{ $k->namaLengkap }}
                </td>
                <td>
                  {{ $k->username }}
                </td>
                <td>
                  <i class="menu-icon mdi mdi-phone"></i>
                  {{ $k->noHp }} <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  {{ $k->alamat }}
                </td>
                <td>
                  <form action="/karyawan/{{ $k->id }}" method="POST">
                    {{-- Update  --}}
                    <a type="button" href="/karyawan/{{ $k->id }}/edit" class="btn btn-warning btn-rounded btn-icon btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
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