@extends('template.main')

@section('content')
    @component( 'components.sidebar', [
        'active'=>'',
        'onclick' => 'sendForm()'
            ])
    @endcomponent
    <div class="content-container">
    <form class="pokecard fullscreen poke-info top-bar-excecutable" method="post">
        @csrf
        <input type="text" name="_method" value="put" hidden>
            <div class="pokemain">
                <input type="text" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="row">
                <div class="col">Tipo:</div>
                <div class="col">
                    <select name="type_id" id="type_id">
                        <option value="" selected disabled>Selecciona un tipo</option>
                        @forelse($types as $type)
                        <option value="{{ $type->id }}" style="background:{{ $type->color }}" >{{ $type->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col">Peso:</div>
                <div class="col">
                <input type="text" name="weight" id="weight" value="{{ old('weight') }}">
                </div>
            </div>
            
            <div class="row">
                <div class="col">Altura:</div>
                <div class="col">
                <input type="text" name="height" id="height" value="{{ old('height') }}">
                </div>
                </div>
            <div class="row">
                <div class="col">                    
                    <button type="submit" style="background: #f44242; border: none; outline: none; padding: 8px 16px;"> Crear </button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('head_js')
    <script>
        function sendForm(){
            const form = document.querySelector('form.top-bar-executable');
            form.submit();
        }
    </script>
@endsection