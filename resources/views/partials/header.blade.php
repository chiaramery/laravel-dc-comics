<header>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}"
                            href="{{ route('comics.index') }}">Comics</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- /NAVBAR --}}
</header>