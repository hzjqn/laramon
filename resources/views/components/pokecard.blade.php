@isset($size)
    @if(!$size)
        <article class="pokecard" pokemon-id="{{ $pokemon->id }}">
            <span class="pokeid">{{ $pokemon->id }}</span>
            <figure class="pokeprofile">
                <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}" alt="{{ $pokemon->name }}">
            </figure>
            <h2>{{ $pokemon->name }}</h2>
            <span class="type-pill {{ $pokemon->type }}"></span>
        </article>
    @elseif($size === 'fullscreen')    
        <article class="pokecard fullscreen" pokemon-id="{{ $pokemon->id }}">
            <h2><span class="pokeid">{{ $pokemon->id }}</span>{{ $pokemon->name }}</h2>
            <figure class="pokeprofile">
                <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}"  alt="{{ $pokemon->name }}">
            </figure>
        </article>
    @endif
@else
    <article class="pokecard" pokemon-id="{{ $pokemon->id }}">
        <span class="pokeid">{{ $pokemon->id }}</span>
        <figure class="pokeprofile">
            <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}" alt="{{ $pokemon->name }}">
        </figure>
        <h2>{{ $pokemon->name }}</h2>
        <span class="type-pill {{ $pokemon->type }}"></span>
    </article>
@endisset