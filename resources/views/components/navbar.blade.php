<nav class="navbar navbar-expand-lg bg-black position-fixed">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">
            <img src="{{ asset('/storage/images/iconaTitolo.png') }}" alt="logo" class="logo">
            The Aulab Post
        </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>

                @auth
                    @if (Auth::user()->is_admin || Auth::user()->is_revisor || Auth::user()->is_writer)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                dashboard
                            </a>
                            <ul class="dropdown-menu">
                                @if (Auth::user()->is_admin)
                                    <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
                                @endif
                                @if (Auth::user()->is_revisor)
                                    <li><a class="dropdown-item" href="{{ route('revisor.dashboard') }}">Dashboard Revisor</a>
                                    </li>
                                @endif
                                @if (Auth::user()->is_writer)
                                    <li><a class="dropdown-item" href="{{ route('writer.dashboard') }}">Dashboard Writer</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('login') }}" style="">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('register') }}" style="">
                            Registrati
                        </a>
                    </li>
                    
                
                
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('article.index') }}">Tutti gli articoli</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Ciao, {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white" href="#"
                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                            Logout
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('article.create') }}">Inserisci un articolo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('careers') }}">Lavora con noi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('article.index') }}">Tutti gli articoli</a>
                    </li>
                    
                @endauth
            </ul>
            <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <form action="{{ route('article.search') }}" method="GET" class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="query" placeholder="Cerca tra gli articoli..."
                    aria-label="Search">
                <button class="btn btn-outline-secondary text-white" type="submit"><img src="{{ asset('/storage/images/iconaSearch.png') }}" alt="logosearch" class="logo-search"></button>
            </form>
            
        </div>
    </div>
</nav>
