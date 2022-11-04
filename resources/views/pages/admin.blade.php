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
                  Kontak
                </th>
                <th>
                  Aksi
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
                  <i class="menu-icon mdi mdi-phone"></i>
                  088217382931 <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  Jl. Ahmad Yani, Gayungan, Surabaya
                </td>
                <td>
                  <button type="button" class="btn btn-warning btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-lead-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-delete-forever"></i>
                  </button>
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
                  <i class="menu-icon mdi mdi-phone"></i>
                  081627382939 <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  Jl. Panji Suroso, Malang
                </td>
                <td>
                  <button type="button" class="btn btn-warning btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-lead-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-delete-forever"></i>
                  </button>
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
                  <i class="menu-icon mdi mdi-phone"></i>
                  081920381829 <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  Jl. Imam Bonjol, Lumajang
                </td>
                <td>
                  <button type="button" class="btn btn-warning btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-lead-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-delete-forever"></i>
                  </button>
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
                  <i class="menu-icon mdi mdi-phone"></i>
                  087272984721 <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  Jl. Bromo, Probolinggo
                </td>
                <td>
                  <button type="button" class="btn btn-warning btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-lead-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-delete-forever"></i>
                  </button>
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
                  <i class="menu-icon mdi mdi-phone"></i>
                  081728292712 <hr>
                  <i class="menu-icon mdi mdi-home-map-marker"></i>
                  Jl. D.I. Panjaitan, Pasuruan
                </td>
                <td>
                  <button type="button" class="btn btn-warning btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-lead-pencil"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm">
                    <i class="mdi mdi-delete-forever"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection