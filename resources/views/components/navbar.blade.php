<nav>
    <div class="brand">MyLife.</div>

    <div class="nav-menu">
        <a href="{{ route('dashboard', ['username' => $username]) }}"
           class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('profile', ['username' => $username]) }}"
           class="{{ request()->routeIs('profile') ? 'active' : '' }}">
            Profile
        </a>

        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
           class="{{ request()->routeIs('pengelolaan') ? 'active' : '' }}">
            Pengelolaan
        </a>

        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
</nav>
