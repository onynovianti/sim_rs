@extends('layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Transaksi</h4>
        <p class="card-description">
          <a href="/transaksi/create" class="btn btn-primary float-end btn-sm" style="margin-right: 10px">+ Tambah</a><br>
        </p>
        {{-- tampilan data pasien pada rute karyawan  --}}
        <div class="table-responsive">
          {{-- table pasien --}}
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  Dokter
                </th>
                <th>
                  Pasien
                </th>
                <th>
                  Obat
                </th>
                <th>
                  Total Harga
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($item as $t)
              <tr>
                <td>
                    {{ $t->dokter->name }}
                </td>
                <td>
                    {{ $t->pasien->name }}
                </td>
                <td>
                    {{ $t->obat->harga }}
                </td>
                <td>
                  @if( $t->verify  === 0)
                    <form action="/verify" method="get" class="d-inline">
                      @csrf
                      <input type="hidden" name="id" value="{{ $t->id }}">
                      <button type="submit" class="btn btn-warning" >Verify</button>
                    </form>
                    
                  @else
                    <form action="/block" method="get" class="d-inline">
                      @csrf
                        <input type="hidden" name="id" value="{{ $t->id }}">
                        <button type="submit" class="btn btn-success" >Verified</button>
                    </form>
                  @endif
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