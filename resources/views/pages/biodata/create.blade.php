@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Tambah Biodata Calon Siswa</h1>
            <h6 class="font-weight-light">Silakan lengkapi isian dibawah ini</h6>
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
            <form action="biodata/store" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik" class="form-label">No Induk KK</label>
                                    <input type="number" name="nik" id="nik" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" name="nisn" id="nisn" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tmpt_lhr" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tmpt_lhr" id="tmpt_lhr" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="" selected disabled> Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_lhr" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lhr" id="tgl_lhr" class="form-control">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sekolah_asal" class="form-label">Asal Sekolah</label>
                            <input type="text" name="sekolah_asal" id="sekolah_asal" class="form-control">
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