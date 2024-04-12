<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $namaHalaman }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('myCSS/main.css') }}">
    <link rel="stylesheet" href="{{ url('myCSS/sidebar.css') }}">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-md sticky-top">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">@ralfazza</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="nav"
                aria-label="Expand Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNav">
                <div class="navbar-nav">
                    <a href="/projects" class="nav-link">Projects</a>
                    <a href="/gallery" class="nav-link">Gallery</a>
                    <a href="/merch" class="nav-link">Merch</a>
                </div>
            </div>

        </div>
    </nav>
    <div class="content-container">
        @yield('container')
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
