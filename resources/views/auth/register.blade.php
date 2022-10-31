@extends('layout.main-auth')

@section('container')
<form class="main-form row d-flex flex-column justify-content-center align-items-center g-3 start mt-sm-4" action="{{ url('/login') }}">
    <div>
        <input type="email" class="form-control" id="inputEmail4" placeholder="email">
    </div>
    <div>
        <input type="password" class="form-control" id="inputPassword4" placeholder="password">
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>
@endsection