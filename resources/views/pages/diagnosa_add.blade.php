<div class="card-body">
    <div class="d-sm-flex justify-content-between align-items-start" style="margin-top: -4%">
      <div>
       <ul>
          <table class="table">
            @foreach ($id as $i)
              {{-- @foreach ($j['name'] as $i) --}}
              <tr class="content">
                <form id="updatefeature" class="form-sample" method="POST" action="/get_medical_api/0">@csrf
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
                <td><a onclick="document.getElementById('updatefeature').submit()" class="btn btn-primary btn-xs"><i class="mdi mdi-check"></i></a></td>
                </form>
              </tr>
              {{-- @endforeach --}}
