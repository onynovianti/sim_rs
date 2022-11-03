@extends('layout/create')

@section('konten')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Administrator</h4>
        <p class="card-description">
        </p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>
                  User
                </th>
                <th>
                  Nama Lengkap
                </th>
                <th>
                  Username
                </th>
                <th>
                  Nomor HP
                </th>
                <th>
                  Alamat
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-1">
                  <img src="{{ asset('assets/images/faces/face1.jpg')}}" alt="image"/>
                </td>
                <td>
                  Herman Beck
                </td>
                <td>
                  hermanbeck
                </td>
                <td>
                  088217382931
                </td>
                <td>
                  Jl. Ahmad Yani, Gayungan, Surabaya
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ asset('assets/images/faces/face2.jpg')}}" alt="image"/>
                </td>
                <td>
                  Messsy Adam
                </td>
                <td>
                  adamesssy
                </td>
                <td>
                  081627382939
                </td>
                <td>
                  Jl. Panji Suroso, Malang
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ asset('assets/images/faces/face3.jpg')}}" alt="image"/>
                </td>
                <td>
                  John Richards
                </td>
                <td>
                  richardss
                </td>
                <td>
                  081920381829
                </td>
                <td>
                  Jl. Imam Bonjol, Lumajang
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ asset('assets/images/faces/face4.jpg')}}" alt="image"/>
                </td>
                <td>
                  Peter Meggik
                </td>
                <td>
                  petermagic
                </td>
                <td>
                  087272984721
                </td>
                <td>
                  Jl. Bromo, Probolinggo
                </td>
              </tr>
              <tr>
                <td class="py-1">
                  <img src="{{ asset('assets/images/faces/face5.jpg')}}" alt="image"/>
                </td>
                <td>
                  Edward
                </td>
                <td>
                  edd_ward
                </td>
                <td>
                  081728292712
                </td>
                <td>
                  Jl. D.I. Panjaitan, Pasuruan
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection