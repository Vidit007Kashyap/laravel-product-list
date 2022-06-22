<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css'
        integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

    @yield('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <header>
        @yield('nav')
    </header>
    <main>
        @yield('content')
    </main>
    <footer></footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js'
        integrity='sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg=='
        crossorigin='anonymous'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    @yield('scripts')
    <script>
        iziToast.settings({
            position: 'topRight',
            timeout: 4000,
            transitionIn: 'fadeInUp',
            transitionOut: 'fadeOut',
            progressBar: false,
            close: true,
            closeOnClick: true,
        });
        @if (Session::has('error'))
            iziToast.show({
                title: 'Error',
                message: '{{ Session::get('error') }}',
                color: 'red',
            });
        @endif
        @if (Session::has('success'))
            iziToast.show({
                title: 'Success',
                message: '{{ Session::get('success') }}',
                color: 'green',
            });
        @endif
        @if (Session::has('warning'))
            iziToast.show({
                title: 'Warning',
                message: '{{ Session::get('warning') }}',
                color: 'yellow',
            });
        @endif
        @if (Session::has('info'))
            iziToast.show({
                title: 'Info',
                message: '{{ Session::get('info') }}',
                color: 'blue',
            });
        @endif
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
