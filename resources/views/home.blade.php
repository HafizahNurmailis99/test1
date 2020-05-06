@extends('layout.main')

@section('title', 'Beranda')

<!-- @section('halaman', 'Anda Berada di Halaman Admin') -->

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda Berada di Halaman Admin
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
