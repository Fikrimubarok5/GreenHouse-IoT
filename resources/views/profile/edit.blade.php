@extends('layouts.app')
@section('content')
{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-strech">
                    <div class="card w-100">
                        <div class="card-body">
                            <h1 class="card-title fw-semibold mb-4">Profile</h1>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-password-form')
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="max-w-xl">
                                        @include('profile.partials.delete-user-form')
                                    </div>
                                </div>
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


{{-- </x-app-layout> --}}
@endsection
