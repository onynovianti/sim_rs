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
                  Harga Obat
                </th>
                <th>
                  Total
                </th>
                {{-- <th>
                  Total Harga
                </th> --}}
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($item as $t)
              <tr>
                {{-- {{ dd($t) }} --}}
                <td>
                    {{ $t->dokter->namaLengkap }}
                </td> 
                <td>
                    {{ $t->pasien->namaLengkap }}
                </td>
                <td>
                  {{ $t->obat->harga }}
                </td>
                <td>
                    {{ ($t->obat->harga)+50000 }}
                </td>
                <td>
                  @if( $t->status  === 0)
                    <form action="/verify" method="post" class="d-inline">
                      @csrf @method('PUT')
                      <input type="hidden" name="id" value="{{ $t->id }}">
                      <button type="submit" class="btn btn-warning" >Verify</button>
                    </form>
                    
                  @else
                    <form action="/block" method="get" class="d-inline">
                      @csrf
                        <input type="hidden" name="id" value="{{ $t->id }}">
                        <button type="submit" class="btn btn-success" disabled>Verified</button>
                    </form>
                  @endif
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