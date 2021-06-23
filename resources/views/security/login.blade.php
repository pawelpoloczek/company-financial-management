<html>
    <head>
        <title>Company financial management</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/lib/materialize/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="/css/login-style.css">
    </head>
    <body>
        <main>
            <div class="row" style="margin-top: 150px;">
                <div class="col s0 m4"></div>
                <div class="col s12 m4">
                    <form action="{{ route('login') }}" method="POST" class="z-depth-5" style="padding: 30px 30px 10px 30px">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Email" id="email" name="email" type="text" class="validate" />
                                <label for="email">{{ __('messages.email') }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Password" id="password" name="password" type="password" class="validate" />
                                <label for="password">{{ __('messages.password') }}</label>
                            </div>
                        </div>
                        <div class="row center-align">
                            <div class="input-field col s12">
                                <button type="submit" class="btn light-blue darken-1">{{ __('messages.log-in') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col s0 m4"></div>
            </div>
        </main>

        <script src="/lib/materialize/js/materialize.min.js"></script>
        <script src="/js/global.js"></script>
    </body>
</html>