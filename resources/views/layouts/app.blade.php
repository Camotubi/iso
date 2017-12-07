<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ISO9126 Backroom</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/dashboard.css">
        <link rel="stylesheet" href="/css/custom.css">
        <!--        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            @include('components.navbar1')
        </nav>
    @show

    <div id="app2" class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block navbar navbar-light sidebar flex-column sidebar">
                @include('components.sidebar1')
            </nav>
            <main style="padding:20px;"class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
    <footer class="footer">
        <img src="/img/utp_logo.png" alt="" height="50px" id="footer_img">
        <h6 class="small" id="footer_legal">COPYRIGHT © 2017 UTP TODOS LOS DERECHOS RESERVADOS</h6>
    </footer>
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
