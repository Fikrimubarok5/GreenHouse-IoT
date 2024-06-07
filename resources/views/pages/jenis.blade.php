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
                            <h1 class="card-title fw-semibold">Type Sensor</h1>
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
                            <th scope="col">Jenis Sensor</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @foreach($jenis as $jeniss)
                            <tr>
                            <th scope="row">{{ $i }}</th>
                            <th scope="row">{{ $jeniss->id }}</th>
                            <td>{{ $jeniss["jenis"] }}</td>
                            <td class="d-flex align-items-center ">
                                <a class="flex-shrink-0 btn btn-warning me-2" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ Route('jenis.show',$jeniss->id  )}}" data-bs-whatever="{{ Route('device.show',$jeniss->id)}}">Edit</a>
                                {{-- <a class="flex-shrink-0 btn btn-warning me-2" href="{{ route('jenis.show',[$jeniss->id])}}" data-bs-toggle="modal" data-bs-target="#editModal{{ route('jenis.show',[$jeniss->id])}}" data-bs-whatever="{{ route('jenis.show',[$jeniss->id])}}">Edit</a> --}}
                                {{-- <button class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ route('device.show',[$device->id])}}" data-whatever="{{ route('device.show',[$device->id])}}">Update</button> --}}
                                {{-- <form action="{{ route('device.destroy',[$jeniss->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE') --}}
                                    <button type="submit" class="btn btn-danger w-100">Delete</button>
                                {{-- </form> --}}
                            </td>
                            @include('pages.editjenis')
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
                    <form action="{{ route('jenis.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                              <label>Jenis Sensor</label>
                              <input type="text" name="jenis" class="form-control" placeholder="Masukkan Type Sensor">
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
@endsection
