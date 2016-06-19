<!DOCTYPE html>
<html>
    <head>
        @yield('head')
    </head>
    <body class="pushable">
        @include('main.sidebar')
        <div class="pusher">
            @yield('body')
        </div>
    </body>
</html>
