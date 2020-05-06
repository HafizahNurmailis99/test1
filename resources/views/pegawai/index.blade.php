@extends('layout.main')

@section('title', 'Data Pegawai')

@section('halaman', 'Daftar Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/pegawai/create" class="btn btn-info my-3">Tambah Data Pegawai</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Golongan</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $pegawai as $pgw )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pgw->nip}}</td>
                            <td>{{ $pgw->nama}}</td>
                            <td>{{ $pgw->golongan}}</td>
                            <td>{{ $pgw->jabatan}}</td>
                            <td>
                                <a href="/pegawai/{{$pgw->id}}" class="badge badge-success">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection