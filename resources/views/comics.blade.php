    @extends('layouts.app')
    @section('hero_section')
        questa è la hero
    @endsection
    @section('cards_section')
        questa è la sezione delle card
        @foreach ($comics as $comic)
            @dump($comic)
            <h1>{{ $comic['title'] }}</h1>
        @endforeach
    @endsection
    @section('hub_section')
        questa è la sezione della hub
    @endsection
    @section('nav_section')
        questa è la sezione della nav
    @endsection






