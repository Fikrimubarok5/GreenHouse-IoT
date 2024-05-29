@extends('layouts.guest')

@section('content')
    <a href="./index.html" class="py-3 text-center text-nowrap logo-img d-block w-100">
    <img src="../assets/images/logos/logo.svg" alt="">
    </a>
    <p class="text-center">Your Social Campaigns</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Username</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-4 d-flex align-items-center justify-content-between">
            <div class="form-check">
            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked name="remember">
            <label class="form-check-label text-dark" for="flexCheckChecked">
                Remeber me
            </label>
            </div>
            <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
        </div>
        <button type="submit" class="py-8 mb-4 btn btn-primary w-100 fs-4 rounded-2">Sign In</button>
        <div class="d-flex align-items-center justify-content-center">
            <p class="mb-0 fs-4 fw-bold">New to Matdash?</p>
            <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">Create an account</a>
        </div>
    </form>
@endsection
