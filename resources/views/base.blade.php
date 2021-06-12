<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/lib/materialize/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right">
                    <li>
                        <a class="nav-item" href="{{route('dashboard')}}">
                            <i class="material-icons">dashboard</i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="nav-item" href="/user/profile">
                            <i class="material-icons">person</i>Profile
                        </a>
                    </li>
                    <li>
                        <a class="nav-item" href="{{route('logout')}}">
                            <i class="material-icons">exit_to_app</i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <script src="/lib/materialize/js/materialize.min.js"></script>
        <script src="/js/global.js"></script>
    </body>
</html>