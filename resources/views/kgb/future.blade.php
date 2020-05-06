@extends('layout.main')

@section('title', 'KGB Pegawai')

@section('halaman', 'KGB Pegawai Tahun Ini')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <a href="/kgb/process" class="btn btn-info my-3">KGB Pegawai 1 Bulan Kedepan</a> -->

                <!-- @if (session('status'))
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
                            <th scope="col">Golongan</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Tanggal Gaji Terakhir</th>
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
                            <td>{{ $pgw->tgl_gajian_akhir}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection