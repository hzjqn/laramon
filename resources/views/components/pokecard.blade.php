@isset($size)
    @if(!$size)
        <article class="pokecard" pokemon-id="{{ $pokemon->id }}">
            <a href="{{ route('pokemon.uno', $pokemon->id) }}">
                <span class="pokeid">{{ $pokemon->id }}</span>
                <figure class="pokeprofile">
                    <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}" alt="{{ $pokemon->name }}">
                </figure>
                <h2>{{ $pokemon->name }}</h2>
                <span class="type-pill {{ $pokemon->type }}"></span>
            </a>
        </article>
    @elseif($size === 'fullscreen')
        <main class="pokecard fullscreen poke-info">
                <div class="pokemain">
                    <span class="pokeid">#{{ $pokemon->id }}</span>
                    <figure class="pokeprofile">
                        <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}" alt="{{ $pokemon->name }}">
                    </figure>
                    <h2>{{ $pokemon->name }}</h2>
                </div>
                <div class="row">
                    <div class="col">Tipo:</div>
                    <div class="col"><span class="type-tag {{ $pokemon->type }}" style="background-color: {{$pokemon->type->color}}">{{ $pokemon->type->name }}</span></div>
                </div>
    
                <div class="row">
                    <div class="col">Peso:</div>
                    <div class="col">{{ $pokemon->weight }}</div>
                </div>
                
                <div class="row">
                    <div class="col">Altura:</div>
                    <div class="col">{{ $pokemon->height }}</div>
                </div>
                
                <div class="row">
                    <div class="col">Linea evolutiva:</div>
                </div>
    
                <div class="row col">
                    @if($pokemon->evolves_from !== null)
                        <div class="col">
                            <a href="{{ route('pokemon.uno', $pokemon->evolves_from->id) }}">
                                <figure class="icon">
                                    <img src="{{ asset('poke-img/images/poke-'.$pokemon->evolves_from->id.'.jpg') }}" alt="{{ $pokemon->name }}"><h6> {{ $pokemon->evolves_from->name }} </h6>
                                </figure>
                            </a>
                        </div>
                    @else 
                        <div class="col">
                            <i class="fas fa-times"></i>
                        </div>
                    @endif
                    <div class="col"><</div>
                    <div class="col">
                        <figure class="icon">
                            <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}" alt="{{ $pokemon->name }}">
                        </figure> 
                    </div>
                    <div class="col">></div>
                    <div class="col">
                    @if($pokemon->evolves !== null)
                        <div class="col">
                            <a href="{{ route('pokemon.uno', $pokemon->evolves->id) }}">
                                <div class="pokedisplay">
                                    <figure class="icon">
                                        <img src="{{ asset('poke-img/images/poke-'.$pokemon->evolves->id.'.jpg') }}" alt="{{ $pokemon->name }}">
                                    </figure>
                                    <h6> {{ $pokemon->evolves->name }} </h6>
                                </div>
                            </a>
                        </div>
                    @else 
                        <div class="col">
                            <div class="pokedisplay">    
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </main>
    @endif
@else   
    <article class="pokecard" pokemon-id="{{ $pokemon->id }}">
        <a href="{{ route('pokemon.uno', $pokemon->id) }}">
            <span class="pokeid">{{ $pokemon->id }}</span>
            <span class="type-pill" style="background-color: {{ $pokemon->type->color }}"></span>
            <figure class="pokeprofile">
                <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}" alt="{{ $pokemon->name }}">
            </figure>
            <h2>{{ $pokemon->name }}</h2>
        </a>
    </article>
@endisset