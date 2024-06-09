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
                            <th scope="col">Type</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">MIN Data</th>
                            <th scope="col">MAX Data</th>
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
                            <td>{{ $device["jenis"] }}</td>
                            <td>{{ $device["min_value"] }}</td>
                            <td>{{ $device["max_value"] }}</td>
                            <td>{{ $device["value"] }}</td>
                            <td class="d-flex align-items-center ">
                                <a class="flex-shrink-0 btn btn-warning me-2" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ Route('device.show',$device->id  )}}" data-bs-whatever="{{ Route('device.show',$device->id)}}">Edit</a>
                                {{-- <a class="flex-shrink-0 btn btn-warning me-2" href="{{ route('device.show',[$device->id])}}" data-bs-toggle="modal" data-bs-target="#editModal{{ route('device.show',[$device->id])}}" data-bs-whatever="{{ route('device.show',[$device->id])}}">Edit</a> --}}
                                {{-- <button class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ route('device.show',[$device->id])}}" data-whatever="{{ route('device.show',[$device->id])}}">Update</button> --}}
                                <form action="{{ route('device.destroy',[$device->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Delete</button>
                                </form>
                            </td>
                            @include('pages.editdevice')
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
        </div>
            <div class="px-6 py-6 text-center">
                <p class="mb-0 fs-4">Developed by <a href="https://www.instagram.com/fikrimubarok05/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">@fikrimubarok05</a> 2024</p>
            </div>
{{-- </div> --}}

    <!-- Tambah Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sensor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('device.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                              <label>Nama Sensor</label>
                              <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Sensor">
                            </div>

                            <div class="form-group">
                              <label>MIN Value</label>
                              <input type="number" name="min_value" id="min_value" class="form-control" placeholder="Masukkan nilai Minimal">
                            </div>

                            <div class="form-group">
                                <label>MAX Value</label>
                                <input type="number" name="max_value" id="max_value" class="form-control" placeholder="Masukkan nilai Maximal">
                            </div>

                            <div class="form-group">
                                <label>Type Sensor</label>
                                <br>
                                <select class="form-control" name="type" id="type">
                                    <option value="Sensor">Sensor</option>
                                    <option value="Actuator">Actuator</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jenis Sensor</label>
                                <br>
                                <select class="form-control" name="jenis" id="type">
                                    @foreach ($jeniss as $jenis)
                                        <option value="{{ $jenis->id }}">{{ $jenis->jenis }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Jenis Sensor</label>
                                <input type="text" name="jenis" class="form-control" value="{{ $device->jenis }}">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('type').addEventListener('change', function () {
            var type = this.value;
            var minValueInput = document.getElementById('min_value');
            var maxValueInput = document.getElementById('max_value');

            if (type === 'sensor') {
                minValueInput.required = true;
                maxValueInput.required = true;
            } else {
                minValueInput.required = false;
                maxValueInput.required = false;
            }
        });
    </script>
@endsection
