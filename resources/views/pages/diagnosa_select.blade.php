@extends('layout/create')

@section('konten')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Pasien</h4>
                <p class="card-description">
                </p>
                {{-- tampilan data pasien  --}}
                <div class="table-responsive">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Nama Lengkap
                                </th>
                                <th>
                                    Jenis Kelamin
                                </th>
                                <th>
                                    Kontak
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tr class="content">
                                <tbody>
                                    @foreach ($item as $p)
                                    <form class="form-sample" method="POST" action="save/{{ $p->id }}"> @csrf
                                        <tr>
                                            <td>
                                                {{ $p->namaLengkap }} <input type="hidden" value="{{ $p->namaLengkap }}" name="namaLengkap">
                                            </td>
                                            <td>
                                                <?php
                                                if ($p->jenisKelamin == 0) {
                                                    echo 'Laki-laki';
                                                } else {
                                                    echo 'Perempuan';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <i class="menu-icon mdi mdi-phone"></i>
                                                {{ $p->noHp }}
                                                <hr>
                                                <i class="menu-icon mdi mdi-home-map-marker"></i>
                                                {{ $p->alamat }}
                                            </td>
                                            <td><button type="submit" class="btn btn-primary btn-xs"><i class="mdi mdi-check"></i></button></td>
                                        </tr>
                                    </form>
                                    @endforeach
                                </tbody>

                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
