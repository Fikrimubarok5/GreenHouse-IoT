@extends('layouts.app')

@section('content')
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <div class="mb-3 row">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
        </div>
        <div class="row">
            <div class="d-flex justify-content-between">
                <div class="card w-50 me-2">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                {{-- <h1 class="card-title fw-semibold">Button</h1> --}}
                            </div>
                        </div>
                        <div class="switch-container d-flex">
                            <div class="form-check form-switch" style="margin-left: 20px; flex: 1;">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault1">
                                <label class="form-check-label" for="flexSwitchCheckDefault1" id="switchLabel1">Water Pump</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-50 ms-2">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                {{-- <h1 class="card-title fw-semibold">Saklar</h1> --}}
                            </div>
                        </div>
                        <div class="switch-container d-flex">
                            <div class="form-check form-switch" style="margin-left: 20px; flex: 1;">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
                                <label class="form-check-label" for="flexSwitchCheckDefault2" id="switchLabel2">Lamp Indicator</label>
                            </div>
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
</div>
@endsection
