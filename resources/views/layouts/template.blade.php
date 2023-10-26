<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <div class="card my-1">
                        <img src="https://likmi.ac.id/wp-content/uploads/2018/08/STMIK-LOGO-3.png"
                        class="<img src=" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    </div>

                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">TRANSACTION</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5"></circle>
                            <path d="M21 21l-5.2-5.2"></path>
                        </svg>
                    </a>
                    <a class="btn btn-outline-secondary" href="#">Sign In</a>
                    <a class="btn btn-outline-secondary" href="#">Sign Up</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">FOOD</a>
                <a class="p-2 link-secondary" href="#">DRINKS</a>
                <a class="p-2 link-secondary" href="#">SHOOPING</a>
                <a class="p-2 link-secondary" href="#">HOUSING</a>
                <a class="p-2 link-secondary" href="#">INSURANCE</a>
                <a class="p-2 link-secondary" href="#">TAXES</a>
                <a class="p-2 link-secondary" href="#">TRANSPORTATION</a>
            </nav>
        </div>
    </div>

    <main class="container">
        @yield('content')
    </main>

    <footer class="blog-footer">
        <p>
            Copyright © {{ date('Y') }} <a href="/">Transaction</a> - <a href="{{ route('transaction-us.index') }}">Transaction Us</a>
        </p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

</body>

</html>
