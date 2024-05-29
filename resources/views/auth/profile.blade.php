@extends('layouts.app')
@section('content')
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h1 class="card-title fw-semibold">Devices</h1>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah Data
                            </button>
                        </div>
                    </div>
                    @php
                    $i = 1;
                    @endphp
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">id</th>
                            <th scope="col">Nama Sensor</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Data</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @foreach($devices as $device)
                            <tr>
                            <th scope="row">{{ $i }}</th>
                            <th scope="row">{{ $device->id }}</th>
                            <td>
                                <a href="{{ Route('devicelog.show',[$device->id])}}">{{ $device->name }}</a>
                            </td>
                            <td>{{ $device->type }}</td>
                            <td>{{ $device["value"] }}</td>
                            <td class="d-flex align-items-center ">
                                <a class="flex-shrink-0 btn btn-warning me-2" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ Route('device.show',[$device->id])}}">Edit</a>
                                <form action="{{ route('device.destroy',[$device->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @php
                            $i++;
                            @endphp
                        @endforeach
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 py-6 text-center">
            <p class="mb-0 fs-4">Developed by <a href="https://www.instagram.com/fikrimubarok05/" target="_blank"
                class="pe-1 text-primary text-decoration-underline">@fikrimubarok05</a> 2024</p>
          </div>
    </div>

@endsection
