<!DOCTYPE html>
<html lang="en">
    <head>
       @include('global.import')
       <link rel="stylesheet" href="{{ asset('css/layout/main-auth.css') }}">
        <title>Document</title>
    </head>
    <body> 
        <div class="main-wrapper w-100 vh-100 d-flex align-items-sm-start align-items-lg-center justify-content-center">
            @yield('container')
        </div>
    </body>
</html>