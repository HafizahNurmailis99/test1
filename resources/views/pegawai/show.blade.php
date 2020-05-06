@extends('layout.main')

@section('title', 'Detail Pegawai')

@section('halaman', 'Detail Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{$employee->nama}}">
                                </div>
                                <label class="col-sm-2 col-form-label">Tempat dan tanggal lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{$employee->tempat_lahir}}, {{$employee->tgl_lahir}}">
                                </div>
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{$employee->nip}}">
                                </div>
                                <label class="col-sm-2 col-form-label">Pangkat</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{$employee->golongan}}">
                                </div>
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{$employee->jabatan}}">
                                </div>
                                <label class="col-sm-2 col-form-label">Kantor/Tempat</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{$employee->kantor}}">
                                </div>
                                <label class="col-sm-2 col-form-label">Gaji Pokok Lama</label>
                                <div class="col-sm-10">
                                    <input type="decimal" readonly class="form-control-plaintext" value="Rp. {{$employee->gaji_pokok_akhir}}">
                                </div>
                                <label class="col-sm-2 col-form-label">Tanggal Gaji Terakhir</label>
                                <div class="col-sm-10">
                                    <input type="date" readonly class="form-control-plaintext" value="{{$employee->tgl_gajian_akhir}}">
                                </div>
                                <label class="col-sm-2 col-form-label">Tanggal Mulai Kerja</label>
                                <div class="col-sm-10">
                                    <input type="date" readonly class="form-control-plaintext" value="{{$employee->tgl_masuk_kerja}}">
                                </div>
                            </div>
                        </form>
                        
                        <a href="{{$employee->id}}/edit" class="btn btn-primary">edit</a>

                        <form action="{{ $employee->id }}" method="post" class="d-inline">
                        @method('delete')
                        <!--jika pakai form, sebaiknya juga pakai @csrf untuk menangani cross side read blabla-->
                        @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        

                        <a href="/pegawai" class="card-link">kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection