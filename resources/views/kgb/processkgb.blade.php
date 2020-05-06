@extends('layout.main')

@section('title', 'Proses KGB Pegawai')

@section('halaman', 'Proses KGB Pegawai')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
            <form method="post" action="/kgb/riwayatcetak">
                <!-- @method('put') -->
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nip">Nama</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ $employee->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control @error ('nip') is-invalid @enderror" id="nip" placeholder="Masukkan nip" name="nip" value="{{ $employee->nip }}">
                        @error('nip')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control @error ('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Masukkan tempat lahir" name="tempat_lahir" value="{{ $employee->tempat_lahir}}">
                        @error('tempat_lahir')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error ('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ $employee->tgl_lahir }}">
                        @error('tgl_lahir')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="nip">Jabatan</label>
                            <input type="text" class="form-control @error ('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ $employee->jabatan }}">
                            @error('jabatan')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="golongan">Pangkat/Golongan</label>
                        <input type="text" class="form-control @error ('golongan') is-invalid @enderror" id="golongan" name="golongan" value="{{ $employee->golongan }}">
                        @error('golongan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="kantor">Kantor</label>
                    <input type="text" class="form-control" id="kantor" name="kantor" value="{{ $employee->kantor }}">
                </div>

                <hr>
                <h4><span class="badge badge-info">Atas Dasar SK Terakhir gaji/pangkat yang ditetapkan</span></h4>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="gaji_pokok_akhir">Gaji Pokok Lama</label>
                        <input type="text" class="form-control @error ('gaji_pokok_akhir') is-invalid @enderror" id="gaji_pokok_akhir" name="gaji_pokok_akhir" value="{{ $employee->gaji_pokok_akhir }}">
                        @error('gaji_pokok_akhir')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tgl_gajian_akhir">Tanggal Gaji Terakhir</label>
                        <input type="date" class="form-control @error ('tgl_gajian_akhir') is-invalid @enderror" id="tgl_gajian_akhir" name="tgl_gajian_akhir" value="{{ $employee->tgl_gajian_akhir }}">
                        @error('tgl_gajian_akhir')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="masa_kerja_lama">Masa Kerja Golongan (tahun)</label>
                        <input type="text" class="form-control @error ('lama_tahun') is-invalid @enderror" id="lama_tahun" name="lama_tahun" value="{{ old('lama_tahun') }}">
                        @error('jabatan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tgl_gaji_datang">Masa Kerja Golongan (bulan)</label>
                        <input type="text" class="form-control @error ('lama_bulan') is-invalid @enderror" id="lama_bulan" name="lama_bulan" value="{{ old('lama_bulan') }}">
                        @error('tgl_gaji_datang')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <hr>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gaji_pokok_baru">Gaji Pokok Baru</label>
                        <input type="text" class="form-control @error ('gaji_pokok_baru') is-invalid @enderror" id="gaji_pokok_baru" name="gaji_pokok_baru" value="{{ old('gaji_pokok_baru') }}">
                        @error('gaji_pokok_baru')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="lama_tahun_skg">Masa Kerja (Tahun)</label>
                        <input type="text" class="form-control @error ('lama_tahun_skg') is-invalid @enderror" id="lama_tahun_skg" name="lama_tahun_skg" value="{{ old('lama_tahun_skg') }}">
                        @error('lama_tahun_skg')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="lama_bulan_skg">Masa Kerja (Bulan)</label>
                        <input type="text" class="form-control @error ('lama_bulan_skg') is-invalid @enderror" id="lama_bulan_skg" name="lama_bulan_skg" value="{{ old('lama_bulan_skg') }}">
                        @error('lama_bulan_skg')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tgl_gaji_berlaku">Mulai Berlaku Tanggal</label>
                        <input type="date" class="form-control @error ('tgl_gaji_berlaku') is-invalid @enderror" id="tgl_gaji_berlaku" name="tgl_gaji_berlaku" value="{{ old('tgl_gaji_berlaku') }}">
                        @error('tgl_gaji_berlaku')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tgl_gaji_datang">Kenaikan Gaji akan datang</label>
                        <input type="date" class="form-control @error ('tgl_gaji_datang') is-invalid @enderror" id="tgl_gaji_datang" name="tgl_gaji_datang" value="{{ old('tgl_gaji_datang')}}">
                        @error('tgl_gaji_datang')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                
                <hr>

                <button type="submit" class="btn btn-primary">Proses KGB Pegawai</button>
                <hr>
            </div>
        </div>
    </div>
@endsection