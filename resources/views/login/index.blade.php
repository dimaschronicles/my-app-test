@extends('layouts.templates')
@section('content')
    <div class="row d-flex justify-content-center py-5">
        <div class="col-lg-12">
            <h1 class="mb-5 text-center">Login</h1>
        </div>
        <div class="col-lg-6">

            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card p-3">
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Login</button>
                        <a href="{{ route('register') }}" class="text-center">Daftar akun</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
