@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Ubah Berkas Calon Siswa</h1>

        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Berkas</li>
            </ol>
        </div>
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col">
            <h6 class="font-semibold">Silakan lengkapi isian dibawah ini</h6>
            <form action="/document/{{$edit_doc->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Kategori</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{old('name', $edit_doc->name)}}">
                                    @error('name')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="url_berkas" class="form-label">Url Berkas</label>
                                    <input type="text" name="url_berkas" id="url_berkas"
                                        class="form-control @error('url_berkas') is-invalid @enderror"
                                        value="{{old('url_berkas', $edit_doc->url_berkas)}}">
                                    @error('url_berkas')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_biodata" class="form-label">ID Biodata</label>
                                    <input type="number" name="id_biodata" id="id_biodata"
                                        class="form-control @error('id_biodata') is-invalid @enderror"
                                        value="{{old('id_biodata', $edit_doc->id_biodata)}}">
                                    @error('id_biodata')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="created_at" class="form-label">Dibuat</label>
                                    <input type="timestamp" name="created_at" id="created_at"
                                        class="form-control  @error('created_at') is-invalid @enderror"
                                        value="{{old('created_at', $edit_doc->created_at)}}">
                                    @error('created_at')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <a href="/document" class="btn btn-sm btn-outline-secondary mr-2">Batal</a>
                                <button type="submit" class=" btn btn-sm btn-primary">Simpan</button>
                            </div>
                        </div>
            </form>

        </div>
    </div>
@endsection