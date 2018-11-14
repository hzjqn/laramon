@extends('template.main')

@section('content')
    @component( 'components.sidebar', [
        'active'=>'',
        'actions' => 
                    [
                        'edit' => [
                            'icon' => 'pencil-alt', 
                            'route' => route('pokemon.editar', $pokemon->id)
                        ],
                    ],
        'postActions' =>
                    [
                        'delete' => [
                            'icon' => 'minus', 
                            'route' => route('pokemon.borrar', $pokemon->id)
                        ]
                    ]
            ])
    @endcomponent
    <div class="content-container">
        @pokecard(['pokemon' => $pokemon, 'size' => 'fullscreen'])
        @endpokecard
    </div>
@endsection