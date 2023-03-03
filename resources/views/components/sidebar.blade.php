<div class="sidebar" id="app">
    <div class="containerLogo logo shadow-sm" id="logo">
        <a href="{{ url('/dashboard') }}">
            <img src="{{ asset('') }}" alt="logo" loading="lazy">
        </a>
    </div>
    <nav class="navbar" id="side">
        <ul class="navbar-nav flex-column">
            <li id="nav-item-bordered" class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="bi bi-speedometer2"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>
            </li>
            @if (Auth::check())
                <li id="nav-item" class="nav-item {{ Request::is('projects') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('projects') }}">
                        <i class="bi bi-laptop"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li id="nav-item-bordered" class="nav-item {{ Request::is('history') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('history') }}">
                        <i class="bi bi-clock"></i>
                        <span>History</span>
                    </a>
                </li>
                <li id="nav-item" class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('profile') }}">
                        <i class="bi bi-person-badge"></i>
                        <span>Profile</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
