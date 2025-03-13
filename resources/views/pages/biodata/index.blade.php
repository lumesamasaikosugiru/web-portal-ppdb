@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Biodata</h1>
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
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="/biodata/create" class="btn btn-primary btn-sm">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>NO</th>
                                <th>NISN</th>
                                <th>CALON SISWA</th>
                                <th>TANGGAL LAHIR</th>
                                <th>USIA</th>
                                <th>JK</th>
                                <th>ASAL SEKOLAH</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($biodatas as $biodata)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td class="text-center">{{$biodata->nisn}}</td>
                                    <td>{{$biodata->name}}</td>
                                    <td class="text-center">{{$biodata->tanggal_lahir}}</td>
                                    <td class="text-center">{{$biodata->usia}} Tahun</td>
                                    <td class="text-center">{{$biodata->jk}}</td>
                                    <td class=>{{$biodata->sekolah_asal}}</td>
                                    <td class="text-center">#</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection