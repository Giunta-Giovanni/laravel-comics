
    
    @extends('layouts.app')
    @section('hero_section')
    @endsection
    @section('home_section')
            questa è la home
    @endsection
    @section('hub_section')
        <div class="container shop-box">
                @foreach ($hub_links as $hub_link)
                   <x-hub_link>
                        <x-slot:text>{{ $hub_link['label'] }}</x-slot>
                        <x-slot:image>{{ $hub_link['img'] }}</x-slot>
                   </x-hub_link>
                @endforeach
            </div>
    @endsection






