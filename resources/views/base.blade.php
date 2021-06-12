<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/lib/materialize/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper light-blue darken-1">
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
        </header>
        <ul class="sidenav sidenav-fixed">
            <li><a href="#!">First Sidebar Link</a></li>
            <li><a href="#!">Second Sidebar Link</a></li>
        </ul>

        <main>
            <div class="row">
                @yield('content')
            </div>
        </main>

        <script src="/lib/materialize/js/materialize.min.js"></script>
        <script src="/js/global.js"></script>
    </body>
</html>