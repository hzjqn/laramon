@extends('template.main')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
@endsection
@section('content')
@component( 'components.sidebar', [
    'active'=>'tipos',
        ])
@endcomponent
<div class="content-container">
  <section class="types">
    @foreach($tipos as $tipo)
      <a href="{{ route('tipo',['tipo'=>$tipo->id]) }}">
        <article class="type" style="background-color:{{ $tipo->color }}">
          <h3>{{ $tipo->name }}</h3>
        </article>
      </a>
    @endforeach
  </section>
</div>
@endsection