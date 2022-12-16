<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Comics @yield('title', 'Home')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')
    <main class="pt-4">
        @yield('content')
    </main>
    @include('partials.footer')

</body>

</html>