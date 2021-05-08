<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
           @include('master.head')
    </head>
    <body>
    	 @yield('content')
    </body>
     @include('master.footer')
     @yield('footer-content')
</html>