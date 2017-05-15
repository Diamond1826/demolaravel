<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dimi's Website</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <nav class="navbar navbar-toggleable-sm navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Dimi's Website</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('impressum') ? 'active' : '' }}"><a href="{{ url('impressum') }}">Impressum</a></li>
                    <li class="{{ Request::is('kontakt') ? 'active' : '' }}"><a href="{{ url('kontakt') }}">Kontakt</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="{{ Request::is('registry') ? 'active' : '' }}"><a href="{{ url('registry') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @else
                    <li><p class="navbar-text">Angemeldet als: <b>{{ Auth::user()->name }}</b></a></p></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div><!-- /.container -->
    <script src="/js/app.js"></script>
</body>
</html>