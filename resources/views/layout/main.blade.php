<!DOCTYPE html>
<html lang="en">
    <head>
       @include('global.import')
        <title>Document</title>
    </head>
    <body> 
        @include('partial.navbar')
        @yield('container')
        @include('partial.footer')
    </body>
</html>