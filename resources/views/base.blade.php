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
                    <a href="#" class="brand-logo">
                        <img src="/img/cfm-logo-white.png">
                    </a>
                    <ul id="nav-mobile" class="right">
                        <li>
                            <a class="nav-item" href="{{route('dashboard')}}">
                                <i class="material-icons">dashboard</i>{{ __('messages.dashboard') }}
                            </a>
                        </li>
                        <li>
                            <a class="nav-item" href="{{route('profile')}}">
                                <i class="material-icons">person</i>{{ __('messages.profile') }}
                            </a>
                        </li>
                        <li>
                            <form class="locale-form" action="{{ route('set-locale') }}" method="POST">
                                @csrf
                                <select name="locale" onchange="this.form.submit()">
                                    <option
                                        @if (session()->get('locale') === 'en')selected="selected" @endif
                                        value="en">EN</option>
                                    <option
                                        @if (session()->get('locale') === 'pl')selected="selected" @endif
                                        value="pl">PL</option>
                                </select>
                            </form>
                        </li>
                        <li>
                            <a class="nav-item" href="{{route('logout')}}">
                                <i class="material-icons">exit_to_app</i>{{ __('messages.logout') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <ul class="sidenav sidenav-fixed">
            <li><a href="{{route('expenses.index')}}">{{ __('messages.expenses') }}</a></li>
            <li><a href="{{route('incomes.index')}}">{{ __('messages.incomes') }}</a></li>
            <li><a href="{{route('expenseTypes.index')}}">{{ __('messages.expense-types') }}</a></li>
            <li><a href="{{route('incomeTypes.index')}}">{{ __('messages.income-types') }}</a></li>
            <li><a href="{{route('currencies.index')}}">{{ __('messages.currencies') }}</a></li>
            <li><a href="{{route('taxRates.index')}}">{{ __('messages.tax-rates') }}</a></li>
        </ul>

        <main>
            @if ($message = Session::get('success'))
                <div class="row">
                    <div class="col s12">
                        <p class="green accent-3 padding">{{ $message }}</p>
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                @yield('content')
            </div>
        </main>

        <script src="/lib/materialize/js/materialize.min.js"></script>
        <script src="/js/global.js"></script>
    </body>
</html>