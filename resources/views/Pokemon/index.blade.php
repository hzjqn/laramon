@extends('template.main')

@section('content')
    @component('components.sidebar', ['active'=>'pokemon', 'actions' => ['add' => ['icon' => 'plus', 'route' => route('pokemon.nuevo')]]])
    @endcomponent
        <div class="content-container p">            
            @forelse ($allPokemon as $pokemon)
                @pokecard(['pokemon' => $pokemon])
                @endpokecard
            @empty
        </div>        
    @endforelse
@endsection