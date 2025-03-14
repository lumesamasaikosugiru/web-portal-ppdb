@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Ubah Biodata Calon Siswa</h1>

        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Biodata</li>
            </ol>
        </div>
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col">
            <h6 class="font-semibold">Silakan lengkapi isian dibawah ini</h6>
            <form action="/biodata/{{$edit_biodata->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik_siswa" class="form-label">No Induk KK</label>
                                    <input type="number" name="nik_siswa" id="nik_siswa"
                                        class="form-control @error('nik_siswa') is-invalid @enderror"
                                        value="{{old('nik_siswa', $edit_biodata->nik_siswa)}}">
                                    @error('nik_siswa')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{old('name', $edit_biodata->name)}}">
                                    @error('name')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" name="nisn" id="nisn"
                                        class="form-control @error('nisn') is-invalid @enderror"
                                        value="{{old('nisn', $edit_biodata->nisn)}}">
                                    @error('nisn')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        value="{{old('tempat_lahir', $edit_biodata->tempat_lahir)}}">
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <div class="form-group">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control @error('jk') is-invalid @enderror"
                                        value="{{old('jk', $edit_biodata->jk)}}">
                                        @error('jk')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                        <option value="" selected disabled> Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control @error('jk') is-invalid @enderror">
                                        @error('jk')
                                            <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                        <option value="" disabled {{ old('jk', $edit_biodata->jk) == '' ? 'selected' : '' }}>
                                            Pilih Jenis Kelamin</option>
                                        <option value="L" {{ old('jk', $edit_biodata->jk) == 'L' ? 'selected' : '' }}>
                                            Laki-Laki</option>
                                        <option value="P" {{ old('jk', $edit_biodata->jk) == 'P' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        value="{{old('tanggal_lahir', $edit_biodata->tanggal_lahir)}}">
                                    @error('tanggal_lahir')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sekolah_asal" class="form-label">Asal Sekolah</label>
                                    <input type="text" name="sekolah_asal" id="sekolah_asal"
                                        class="form-control @error('sekolah_asal') is-invalid @enderror"
                                        value="{{old('sekolah_asal', $edit_biodata->sekolah_asal)}}">
                                    @error('sekolah_asal')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_user" class="form-label">Id_User</label>
                                    <select name="id_user" id="id_user"
                                        class="form-control @error('id_user') is-invalid @enderror">
                                        @foreach ($orangtua as $orangtuaid)
                                            <option value="{{$orangtuaid->id}}" {{$orangtuaid->id_user === $orangtuaid->id ? 'selected' : ''}}>{{$orangtuaid->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_user')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="/biodata" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                            <button type="submit" class=" btn btn-sm btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection