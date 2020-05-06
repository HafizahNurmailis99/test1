@extends('layout.main')

@section('title', 'Proses KGB Pegawai')

@section('halaman', 'Proses KGB Pegawai')

@section('container')

hiya hiya

        @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
        @endif
@endsection