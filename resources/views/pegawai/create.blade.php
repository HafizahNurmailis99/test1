@extends('layout.main')

@section('title', 'Tambah Pegawai')

@section('halaman', 'Tambah Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post" action="/pegawai">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nip">Nama</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{old('nama')}}">
                        @error('nama')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control @error ('nip') is-invalid @enderror" id="nip" placeholder="Masukkan nip" name="nip" value="{{old('nip')}}">
                        @error('nip')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control @error ('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Masukkan tempat lahir" name="tempat_lahir" value="{{old('tempat_lahir')}}">
                        @error('tempat_lahir')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error ('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{old('tgl_lahir')}}">
                        @error('tgl_lahir')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control @error ('jabatan') is-invalid @enderror" id="jabatan" placeholder="Masukkan jabatan" name="jabatan" value="{{old('jabatan')}}"></textarea>
                    @error('jabatan')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="golongan">Pangkat/Golongan</label>
                    <select id="golongan" class="custom-select form-control @error ('pangkat') is-invalid @enderror" name="golongan">
                        <option selected disabled value="{{old('golongan')}}">Pilih pangkat</option>
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>V</option>
                        <option>VI</option>
                    </select>
                    @error('pangkat')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                    <label for="gaji_pokok_akhir">Gaji Pokok Lama</label>
                    <input type="text" class="form-control @error ('gaji_pokok_akhir') is-invalid @enderror" id="gaji_pokok_akhir" placeholder="Masukkan gaji pokok" name="gaji_pokok_akhir" value="{{old('gaji_pokok_akhir')}}"></textarea>
                    @error('gaji_pokok_akhir')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_gajian_akhir">Tanggal Gaji Terakhir</label>
                    <input type="date" class="form-control @error ('tgl_gajian_akhir') is-invalid @enderror" id="tgl_gajian_akhir" placeholder="Masukkan tanggal gaji akhir" name="tgl_gajian_akhir" value="{{old('tgl_gajian_akhir')}}"></textarea>
                    @error('tgl_gajian_akhir')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_masuk_kerja">Tanggal Masuk Kerja</label>
                    <input type="date" class="form-control @error ('tgl_masuk_kerja') is-invalid @enderror" id="tgl_masuk_kerja" placeholder="Masukkan tgl_masuk_kerja" name="tgl_masuk_kerja" value="{{old('tgl_masuk_kerja')}}"></textarea>
                    @error('tgl_masuk_kerja')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kantor">Kantor</label>
                    <input type="text" class="form-control" id="kantor" name="kantor" value="Dinas Sosial Provinsi Riau">
                </div>
                <button type="submit" class="btn btn-success">Tambah Data Pegawai</button>
                </form>
            </div>
        </div>
    </div>
@endsection