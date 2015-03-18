<!DOCTYPE html>
<html>
    <head>
        <title>Gravatar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}"/>
        <style>
            body{
                padding-top: 70px;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Gravatar</a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::check())
                                <li><a href="/logout">Logout</a></li>
                            @else
                                <li><a href="/register">Sign up</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                @if (Auth::check())
                    @yield('body.main')    {{--show if logged in--}}
                @else
                    @yield('body.login')         {{--show login form--}}
                @endif

                @yield('body.register')
            </div>
        </div>




        <script src="{{ URL::asset('assets/js/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>