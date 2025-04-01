@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Pendaftaran Sekolah</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Pendaftaran</li>
            </ol>
        </div>
    </div>
@endsection


@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="#" class="btn btn-primary btn-sm">
                        Daftarkan Sekolah
                    </a>
                </div>
                <div class="card-body">
                    {{-- <div class="row">
                        <table class="table table-borderless">
                        </table>
                    </div> --}}
                    <div class="row align-items-center">
                        <!-- Avatar -->
                        <div class="col-md-2 text-center">
                            <img src="{{ asset('path-ke-avatar.jpg') }}" class="rounded-circle" width="80" height="80"
                                alt="Avatar Siswa">
                        </div>

                        <!-- Informasi Pendaftaran -->
                        <div class="col-md-10">
                            <h5 class="mb-1"><strong>siswa</strong></h5>
                            <p class="mb-1 text-muted">Jenis Gelombang: <span class="badge bg-success">Afirmasi</span></p>
                            <p class="mb-0">Sekolah Tujuan: <strong>SMK</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection