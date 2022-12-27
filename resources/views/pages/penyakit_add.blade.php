@extends('layout/create')
@section('konten')
<div class="row">
    <div class="col-lg-5 d-flex flex-column">
      <div class="row">
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
                                <tr class="content">
                                        <td>{{ $j->name }} <input type="hidden" value="{{ $j->name }}" name="nama"></td>
                                        <td>{{ $j->value }} <input type="hidden" value="{{ $j->value }}" name="nilai"></td>
                                        <td>
                                            <form action="/gejala/{{ $j->id }}" method="POST">
                                            @csrf
                                            @method("delete")
                                            <button type="submit" class="btn btn-danger btn-rounded btn-icon btn-sm">
                                                <i class="mdi mdi-delete-forever"></i>
                                            </button>
                                            </form>
                                        </td>
                                </tr>
                                @endforeach
                            @else
                            <td>{{ $fiturGejala }}</td>
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
        <div class="col-12 grid-margin stretch-card">
            <div class="card card-rounded">
              <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                  <div>
                    <a class="btn btn-primary btn-block float-end btn-xs" href="/diagnosa">Selesai</a>

                   <ul><br><br><hr>
                      <ol>Penyakit yang ditambahkan</ol><br><br>
                      {{-- {{ dd(json_decode($fiturGejala)) }} --}}
                      <table class="table">
                          @if($diagnosisPenyakit)
                                  @foreach ($diagnosisPenyakit as $j)
                                  <tr class="content">
                                          <td>{{ $j->penyakit }} <input type="hidden" value="{{ $j->penyakit }}" name="penyakit"></td>
                                          <td>
                                              <form action="/penyakit/{{ $j->id }}" method="POST">
                                              @csrf
                                              @method("delete")
                                              <button type="submit" class="btn btn-danger btn-rounded btn-icon btn-sm">
                                                  <i class="mdi mdi-delete-forever"></i>
                                              </button>
                                              </form>
                                          </td>
                                  </tr>
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
</div>
<div class="row no-gutters" id="tambahgejala">
    <div class="col-lg-12 d-flex flex-column" style="max-height: 400px;
    overflow-y: auto;">
      <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-title sticky-top" style="padding: 5%; background-color:white;">
              Daftar Penyakit
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
                      @foreach ($output as $j)
                        {{-- @foreach ($j['name'] as $i) --}}
                        <tr class="content">
                          <form class="form-sample" method="POST" action="/outputUpdate/{{ $diagnosa->id }}">@csrf
                            <input type="hidden" value="{{ $diagnosa->id }}" name="idDiag">
                          <td>{{ $j['text'] }} <input type="hidden" value="{{ $j['text'] }}" name="penyakit"></td>
                          <td><button type="submit" class="btn btn-primary btn-xs"><i class="mdi mdi-check"></i></button></td>
                          {{-- <td><a onclick="document.getElementById('updatefeature').submit()" class="btn btn-primary btn-xs"><i class="mdi mdi-check"></i></a></td> --}}
                          </form>
                        </tr>
                        {{-- @endforeach --}}

                      @endforeach
                    </table><hr>
                 </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
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
                        <form class="form-sample" method="POST" action="/featureUpdate/{{ $diagnosa->id }}">@csrf
                        <input type="hidden" value="{{ $diagnosa->id }}" name="idDiag">
                        <td>{{ $j['name'] }} <input type="hidden" value="{{ $j['name'] }}" name="name"></td>
                        <td>
                          @isset($j['min'])
                          <input class="form-control form-control-md" name="value" type="number" min="{{ $j['min'] }}" max="{{ $j['max'] }}"/>
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
