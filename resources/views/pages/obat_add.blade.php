@extends('layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Obat</h4>
      <form class="form-sample" method="POST" action="/obat">@csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nama Obat</label>
              <div class="col-sm-9">
                <input type="text" name="nama" class="form-control"/>
                @error('nama')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Jumlah</label>
              <div class="col-sm-9">
                <input type="number" name="jumlah" class="form-control" />
                @error('jumlah')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Deskripsi</label>
                  <div class="col-sm-9">
                    <textarea name="deskripsi" rows="5" class="form-control"></textarea>
                    @error('deskripsi')
                            <code>
                              {{ $message }}
                            </code>
                              @enderror
                  </div>
                </div>
              </div>
          
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Harga</label>
              <div class="col-sm-9">
                <input type="number" name="harga" class="form-control" />
                @error('harga')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Kadaluarsa</label>
              <div class="col-sm-9">
                <input type="text" name="tanggalKadaluarsa" class="form-control" placeholder="yyyy-mm-dd"/>
                @error('tanggalKadaluarsa')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
    
@endsection