<!DOCTYPE html>
<html lang="en">
    <head>
       @include('global.import')
        <title>Document</title>
    </head>
    <body> 
        @include('partial.sidebar')
        @include('partial.navbar-admin')
        @yield('container')
    </body>
</html>