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
                            <h1 class="card-title fw-semibold">{{ $device["name"] }}</h1>
                        </div>
                    </div>
                    @php
                        $i = 1;
                        @endphp
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Data</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            @foreach($data as $datas)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $datas["created_at"] }}</td>
                                <td>{{ $datas["value"] }}</td>
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




