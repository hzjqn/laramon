<div class="top-bar">
    <ul class="actions">
        @forelse ($actions as $action)
        <li class="action">
            <a class="action-btn" href="{{ $action['route'] ?? null }}" onclick={{ $action['onclick'] ?? null }}>
                <i class="fas fa-{{ $action['icon'] }}"></i>
            </a>
        </li>
        @empty
            
        @endforelse
    </ul>
</div>
<nav class="sidebar">
    <button class="menu-btn" onclick="toggleSidebar()">
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
    </button>
    <div class="brand">
        @component('components.logo', ['url' => route('inicio'), 'size' => 32])
        Laramon
        @endcomponent
    </div>
    
    <ul class="sidebar-links">
        <li class="sidebar-item {{ $active == 'pokemon' ? 'active' : '' }}">    
            <a href="{{ route('pokemon.todos') }}" class="sidebar-link"><i class="fas fa-hashtag"></i> {{ __('Pokemon')}}</a>
        </li>
        <li class="sidebar-item {{ $active == 'tipos' ? 'active' : '' }}">    
            <a href="{{ route('tipos') }}" class="sidebar-link"><i class="fas fa-clone"></i> {{ __('Types') }}</a>
        </li>
    </ul>
</nav>