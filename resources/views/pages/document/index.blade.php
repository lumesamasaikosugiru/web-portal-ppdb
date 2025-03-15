@extends('layouts.main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Berkas Calon Siswa</h1>
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
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="/document/create" class="btn btn-primary btn-sm">
                        Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>URL</th>
                                <th>ID BIODATA</th>
                                <th>DIBUAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($document as $documents)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td>{{$documents->name}}</td>
                                    <td>{{$documents->url_berkas}}</td>
                                    <td class="text-center">{{$documents->id_biodata}}</td>
                                    <td class="text-center">{{$documents->created_at}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="/document/edit/{{$documents->id}}"
                                                class="btn btn-sm btn-primary mr-2">Edit</a>
                                            <a href="#" class="btn btn-sm btn-primary mr-2">Detail</a>
                                            <form action="/document/{{$documents->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection