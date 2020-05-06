@extends('layout.main')

@section('title', 'Data Pegawai')

@section('halaman', 'Daftar Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="" class="btn btn-info my-3">Proses KGB Pegawai</a>
<!-- 
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif -->

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Gaji SK Lama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $pegawai as $employee )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $employee->nip}}</td>
                            <td>{{ $employee->nama}}</td>
                            <td>{{ $employee->tgl_gajian_akhir}}</td>
                            <td>
                                <a href="kgb/{{$employee->id}}/processkgb" class="badge badge-success">Proses</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection