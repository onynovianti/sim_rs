@extends('layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Diagnosis</h4>
        <p class="card-description">
          <a href="/diagnosa/create" class="btn btn-primary float-end btn-sm" style="margin-right: 10px">+ Tambah</a><br>
        </p>

        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  Nama Lengkap
                </th>
                <th>
                  Tanggal Diagnosis
                </th>
                <th>
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($asas as $i)
              <tr>
                <td>
                  {{ $i->namaLengkap }}
                </td>
                <td>
                  {{ $i->created_at }}
                </td>
                <td>
                  <form action="/diagnosa/{{ $i->id }}" method="POST">
                    {{-- Update  --}}
                    <a type="button" href="/diagnosa/update/{{ $i->id }}" class="btn btn-warning btn-rounded btn-icon btn-sm"><i class="mdi mdi-refresh"></i></a>
                    @method("POST")
                    @csrf
                    {{-- Delete  --}}
                    <a type="button" href="/diagnosa/session/{{ $i->id }}" class="btn btn-warning btn-rounded btn-icon btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
                    @csrf
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
