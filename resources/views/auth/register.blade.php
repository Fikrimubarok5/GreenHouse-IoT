@extends('layouts.guest')
@section('content')
    <a href="./index.html" class="py-3 text-center text-nowrap logo-img d-block w-100">
        <img src="../assets/images/logos/logo.svg" alt="">
    </a>
    <p class="text-center">Your Social Campaigns</p>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" >
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
        </div>
            <button type="submit" class="py-8 mb-4 btn btn-primary w-100 fs-4 rounded-2">Register</button>
        <div class="d-flex align-items-center justify-content-center">
            <p class="mb-0 fs-4 fw-bold">Already have an Account?</p>
            <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Sign In</a>
        </div>
    </form>
@endsection
