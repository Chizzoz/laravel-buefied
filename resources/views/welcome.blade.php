<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel {{ app()->version() }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buefy.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .versioninfo {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
    }

    .framwork_title {
        font-weight: 600;
        padding-top: 20px;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
                <p class="versioninfo">Version {{ app()->version() }}</p>
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>

            <div class="foundation_button_test">
                <p class="framwork_title">Bulma v0.7.4</p>
                <p class="framwork_title">Bulma Extension v4.0.2</p>

                <div class="block">
                    <a class="button is-primary">Primary</a>
                    <a class="button is-info">Info</a>
                    <a class="button is-success">Success</a>
                    <a class="button is-warning">Warning</a>
                    <a class="button is-danger">Danger</a>
                </div>
                <div id="app">
                    <template>
                        <p class="framwork_title">Buefy v0.8.17</p>
                        <div class="buttons">
                            <b-button type="is-primary">Primary</b-button>
                            <b-button type="is-success">Success</b-button>
                            <b-button type="is-danger">Danger</b-button>
                            <b-button type="is-warning">Warning</b-button>
                            <b-button type="is-info">Info</b-button>
                            <b-button type="is-link">Link</b-button>
                            <b-button type="is-light">Light</b-button>
                            <b-button type="is-dark">Dark</b-button>
                            <b-button type="is-text">Text</b-button>
                        </div>

                        <div class="buttons">
                            <b-button disabled>Disabled</b-button>
                            <b-button loading>Loading</b-button>
                            <b-button rounded>Rounded</b-button>
                        </div>

                        <div class="buttons">
                            <b-button type="is-primary" outlined>Outlined</b-button>
                            <b-button type="is-success" outlined>Outlined</b-button>
                            <b-button type="is-danger" outlined>Outlined</b-button>
                            <b-button type="is-warning" outlined>Outlined</b-button>
                        </div>

                        <div class="buttons">
                            <b-button type="is-primary" expanded>Expanded</b-button>
                        </div>
                        <div class="block">
                            <b-icon icon="account" size="is-small">
                            </b-icon>
                            <b-icon icon="home" size="is-small">
                            </b-icon>
                            <b-icon icon="view-dashboard" size="is-small">
                            </b-icon>
                        </div>

                        <div class="block">
                            <b-icon icon="account"></b-icon>
                            <b-icon icon="home"></b-icon>
                            <b-icon icon="view-dashboard"></b-icon>
                        </div>

                        <div class="block">
                            <b-icon icon="account" size="is-medium">
                            </b-icon>
                            <b-icon icon="home" size="is-medium">
                            </b-icon>
                            <b-icon icon="view-dashboard" size="is-medium">
                            </b-icon>
                        </div>

                        <div class="block">
                            <b-icon icon="account" size="is-large" type="is-success">
                            </b-icon>
                            <b-icon icon="home" size="is-large" type="is-info">
                            </b-icon>
                            <b-icon icon="view-dashboard" size="is-large" type="is-primary">
                            </b-icon>
                        </div>

                        <button class="button is-dark">
                            <b-icon icon="check"></b-icon>
                            <span>Finish</span>
                        </button>

                        <button class="button is-warning">
                            <b-icon icon="check"></b-icon>
                            <span>Finish</span>
                        </button>
                        <div class="block">
                            <b-icon pack="fas" icon="user" size="is-small">
                            </b-icon>
                            <b-icon pack="fas" icon="home" size="is-small">
                            </b-icon>
                            <b-icon pack="fas" icon="tachometer-alt" size="is-small">
                            </b-icon>
                        </div>

                        <div class="block">
                            <b-icon pack="fas" icon="user">
                            </b-icon>
                            <b-icon pack="fas" icon="home">
                            </b-icon>
                            <b-icon pack="fas" icon="tachometer-alt">
                            </b-icon>
                        </div>

                        <div class="block">
                            <b-icon pack="fas" icon="user" size="is-medium">
                            </b-icon>
                            <b-icon pack="fas" icon="home" size="is-medium">
                            </b-icon>
                            <b-icon pack="fas" icon="tachometer-alt" size="is-medium">
                            </b-icon>
                        </div>

                        <div class="block">
                            <b-icon pack="fas" icon="user" size="is-large" type="is-success">
                            </b-icon>
                            <b-icon pack="fas" icon="home" size="is-large" type="is-info">
                            </b-icon>
                            <b-icon pack="fas" icon="tachometer-alt" size="is-large" type="is-primary">
                            </b-icon>
                        </div>

                        <button class="button is-dark">
                            <b-icon pack="fas" icon="check"></b-icon>
                            <span>Finish</span>
                        </button>

                        <button class="button is-warning">
                            <b-icon pack="fas" icon="check"></b-icon>
                            <span>Finish</span>
                        </button>

                        <button class="button is-warning">
                            <b-icon pack="fas" icon="sync-alt" custom-class="fa-spin">
                            </b-icon>
                            <span>Refresh</span>
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>