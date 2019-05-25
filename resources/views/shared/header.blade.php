<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{url('/')}}" class="navbar-brand">FIMart</a>
        </li>
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @else
        @if (Auth::user()->hasRole('admin'))
            <li class="nav-item">
                <a href="{{route('kategori.create')}}" class="nav-link">Tambah Kategori</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Tambah Barang</a>
            </li>
        @endif
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</nav>
