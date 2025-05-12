
    
    @extends('layouts.app')
    @section('hero_section')
    @endsection
    {{-- card section --}}
    @section('cards_section')
    <div class="container">
  {{-- row card  --}}
        <div class="bk-box-card">

            {{-- ciclo sulle card --}}
            @foreach ($comics as $comic)

                {{-- {{col card}} --}}
                    <x-card>
                        <x-slot:title>{{ $comic['series'] }}</x-slot>
                        <x-slot:image>{{ $comic['thumb'] }}</x-slot>
                    </x-card>

            @endforeach

        </div>

            {{-- button Load More --}}
            <div class="box-load-more">
                <button>
                    Load More
                </button>
        </div>

    </div>
      
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






