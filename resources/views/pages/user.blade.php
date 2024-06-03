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
                            <h1 class="card-title fw-semibold">USER</h1>
                        </div>
                    </div>
                    @php
                        $i = 1;
                        @endphp
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            @foreach($user as $users)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $users["name"] }}</td>
                                <td>{{ $users["email"] }}</td>
                                <td>{{ $users["created_at"] }}</td>
                                <td>
                                    <form action="{{ route('user.destroy',[$users->id]) }}" method="POST">
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
