@extends('layout.main-auth')

@section('container')
<form class="main-form row d-flex flex-column justify-content-center align-items-center g-3 start mt-sm-4" action="{{ url('/') }}">
    
    <div class="d-flex justify-content-center mt-4">
        <h2>Noor Course</h2>
    </div>
    <div>
        <input type="text" class="form-control" name="nama-lengkap" placeholder="Nama Lengkap">
    </div>
    <div>
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div>
        <select class="form-control" enabled name="jenis-kelamin">
            <option selected>Jenis Kelamin</option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
          </select>
    </div>
    <div>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary">Daftar</button>
    </div>
</form>
@endsection