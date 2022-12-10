@extends('layout/create')
@section('konten')
<div class="row">
    <div class="col-lg-5 d-flex flex-column">
      <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                  <a class="btn btn-primary btn-block float-end btn-xs" href="#tambahgejala">+ Tambah Gejala</a>

                 <ul><br><br><hr>
                    <ol>Gejala yang ditambahkan</ol><br><br>
                    {{-- {{ dd(json_decode($fiturGejala)) }} --}}
                    <table class="table">
                        @if($fiturGejala)
                                @foreach ($fiturGejala as $j)
                                <ul class="content">
                                        <form id="deleteFeature" class="form-sample" method="POST" action="featureDelete">@csrf
                                            <td>{{ $j['name'] }} <input type="hidden" value="{{ $j['name'] }}" name="nama"></td>
                                            <td>{{ $j['value'] }} <input type="hidden" value="{{ $j['value'] }}" name="nilai"></td>
                                            <td><a onclick="document.getElementById('deleteFeature').submit()" class="btn btn-danger btn-xs" href="">x</a></td>
                                        </form>
                                    </ul>
                                @endforeach

                        @endif
                        {{-- @foreach ($fiturGejala as $j)
                        <tr class="content">
                            <form id="deleteFeature" class="form-sample" method="POST" action="featureDelete">@csrf
                                <td>{{ $j['name'] }} <input type="hidden" value="{{ $j['name'] }}" name="nama"></td>
                                <td>{{ $j['value'] }} <input type="hidden" value="{{ $j['value'] }}" name="nilai"></td>
                                <td><a onclick="document.getElementById('deleteFeature').submit()" class="btn btn-danger btn-xs" href="">x</a></td>
                            </form>
                        </tr>
                        @endforeach --}}
                    </table><hr>
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
    <div class="col-lg-7 d-flex flex-column">
      <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                  <a class="btn btn-primary btn-block float-end btn-xs" href="#tambahgejala"><i class="mdi mdi-auto-fix" style="font-size: 10px"></i> &nbsp; Mulai Analisis</a>
                 <ul><br><br><hr>
                    <ol>Diagnosis yang mungkin : </ol><br>
                    <table class="table">
                        <tr>
                            <?php
                            if ($diagnosisPenyakit == null) {
                                echo "Kosong";
                            } else { ?>
                                @foreach ($diagnosisPenyakit as $j => $v)
                                <ul class="content">
                                    <form id="deleteFeature" class="form-sample" method="POST" action="featureDelete">@csrf
                                        <td>{{ $j['name'] }} <input type="hidden" value="{{ $j['name'] }}" name="nama"></td>
                                        <td><a onclick="document.getElementById('deleteFeature').submit()" class="btn btn-danger btn-xs" href="">x</a></td>
                                    </form>
                                </ul>
                                @endforeach
                            <?php }
                            ?>
                            <td><a class="btn btn-primary btn-xs" href="" data-toggle="tooltip" data-placement="bottom" title="Tambahkan ke Rekam Medis">-></a></td>
                        </tr>
                    </table><hr>
                    Keterangan : <br><br>
                    <b>Diagnosis ditentukan berdasarkan gejala yang dialami pasien</b>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="row no-gutters" id="tambahgejala">
  <div class="col-lg-12 d-flex flex-column" style="max-height: 400px;
  overflow-y: auto;">
    <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
          <div class="card-title sticky-top" style="padding: 3%; background-color:white;">
            Daftar Gejala
            @if(session('ses'))
                        <div class="alert alert-danger my-4">
                            {{ session('ses') }}
                        </div>
                        @endif
            <form class="search-form" action="#"><br>
              <input type="search" id="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </div>

          <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start" style="margin-top: -4%">
              <div>
               <ul>
                  <table class="table">
                    @foreach ($feature as $j)
                      {{-- @foreach ($j['name'] as $i) --}}
                      <tr class="content">
                        <form class="form-sample" method="POST" action="/diagnosa/session/{{ $patient->id }}">@csrf
                        <td>{{ $j['name'] }} <input type="hidden" value="{{ $j['name'] }}" name="nama"></td>
                        <td>
                          @isset($j['min'])
                          <input class="form-control form-control-md" name="nilai" type="number" min="{{ $j['min'] }}" max="{{ $j['max'] }}"/>
                          @endisset
                          @isset($j['choices'])
                          <select class="form-control" id="exampleFormControlSelect2" name="nilai">
                            @foreach ($j['choices'] as $c)
                              <option value="{{ $c['value'] }}">{{ $c['text'] }}</option>
                            @endforeach
                          </select>
                          @endisset
                        </td>
                        <td><button type="submit" class="btn btn-primary btn-xs"><i class="mdi mdi-check"></i></button></td> @method("POST")
                        {{-- <td><a onclick="document.getElementById('updatefeature').submit()" class="btn btn-primary btn-xs"><i class="mdi mdi-check"></i></a></td> --}}
                        </form>
                      </tr>
                      {{-- @endforeach --}}

                    @endforeach
                  </table><hr>
                  Keterangan : <br><br>
                  <b>Diagnosis ditentukan berdasarkan gejala yang dialami pasien</b>
               </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
