<article class="pokecard" pokemon-id="{{ $pokemon->id }}">
    <h2><span class="pokeid">{{ $pokemon->id }}</span>{{ $pokemon->name }}</h2>
    <figure class="pokeprofile">
        <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}" alt="">
    </figure>
</article>