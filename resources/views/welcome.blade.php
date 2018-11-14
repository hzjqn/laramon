@extends('template.main')


@section('content')
    @component('components.sidebar', ['active'=>'', 'actions' => [null]])
    @endcomponent
    <div class="content-container">
        <div class="start">
            <ul class="start-screen-list">
                <li class="action">
                    <a href="{{ route('pokemon.todos') }}"><div class="link-block"><figure class="icon"><i class="fas fa-hashtag"></i></figure>{{ __('Pokemon') }}</div></a>
                </li>
                <li class="action">
                    <a href="{{ route('tipos') }}"><div class="link-block"><figure class="icon"><i class="fas fa-clone"></i></figure>{{ __('Types') }}</div></a>
                </li>
            </ul>
        </div>
    </div>
@endsection