@extends('layout.main-auth')

@section('container')
    <form class="main-form row d-flex flex-column justify-content-center align-items-center g-3 start mt-sm-4 col-12">
        <div class="d-flex justify-content-center mt-4">
            <h2>Noor Course</h2>
        </div>
        <div>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <p>Belum punya akun?</p>
        </div>
        <div class="row d-flex flex-column justify-content-center align-items-center g-12 start">
            <div class="d-flex justify-content-center">
                <a type="button" href="{{ url('/register') }}" class="btn btn-secondary">Daftar</a>
            </div>
        </div>
    </form>
@endsection