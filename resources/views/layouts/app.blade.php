<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- header --}}
    @include('partials.header')

    <main>
        {{-- sezione hero --}}
        <section class="hero-section">
            @yield('hero_section')
        </section>
        {{-- sezione card --}}
        <section class="cards-section">
            @yield('cards_section')
        </section>
        {{-- sezione hub  --}}
        <section class="hub-section">
            @yield('hub_section')
        </section>
        {{-- sezione nav  --}}
        <section class="nav-section">
            @yield('nav_section')
        </section>
    </main>
    
    {{-- footer --}}
    @include('partials.footer')
    
</body>
</html>