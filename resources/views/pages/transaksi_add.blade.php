@extends('layout/create')

@section('konten')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Transaksi</h4>
      <form class="form-sample" method="POST" action="/transaksi">@csrf
        <p class="card-description">
          Personal info
        </p>
{{-- {{ dd($dokter,$pasien,$obat) }} --}}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Dokter</label>
              <div class="col-sm-9">
                <select name="dokter_id" id="dokter" class="form-select">
                  <option value="">-</option>
                  @foreach($dokter as $d)
                    <option value="{{$d->id}}">{{$d->namaLengkap}}</option>
                  @endforeach

                </select>
                
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Pasien</label>
              <div class="col-sm-9">
                <select name="pasien_id" id="pasien" class="form-select">
                  <option value="">-</option>
                  @foreach($pasien as $p)
                    <option value="{{$p->id}}">{{$p->namaLengkap}}</option>
                  @endforeach
                  
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Harga Obat</label>
              <div class="col-sm-9">
                <select name="obat_id" id="obat" class="form-select">
                  <option value="">-</option>
                  @foreach($obat as $d)
                    <option value="{{$d->id}}">{{$d->nama}}</option>
                  @endforeach
                </select>
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