<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/lib/materialize/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/">Dashboard</a></li>
                    <li><a href="/user/profile">Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
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