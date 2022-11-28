@extends('layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Obat</h4>
        <p class="card-description">
          <a href="/obat/create" class="btn btn-primary float-end btn-sm" style="margin-right: 10px">+ Tambah</a><br>
        </p>
        
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  Nama Obat
                </th>
                <th>
                  Deskripsi
                </th>
                <th>
                  Jumlah
                </th>
                <th>
                  Harga
                </th>
                <th>
                  Tanggal Kadaluarsa
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
                  {{ $i->nama }}
                </td>
                <td>
                  {{ mb_strimwidth($i->deskripsi, 0, 40, "..."); }}
                  {{-- {{ $i->deskripsi }} --}}
                </td>
                <td>
                  {{ $i->jumlah }}
                </td>
                <td>{{ $i->harga }}
                </td>
                <td>{{ $i->tanggalKadaluarsa }}
                </td>
                <td>
                  <form action="/obat/{{ $i->id }}" method="POST">
                    {{-- Update  --}}
                    <a type="button" href="/obat/{{ $i->id }}/edit" class="btn btn-warning btn-rounded btn-icon btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
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