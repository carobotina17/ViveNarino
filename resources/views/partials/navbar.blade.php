
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar container navigation-clean-search"><a class="navbar-brand" href="{{ url('/') }}">Vive Nariño</a>
        @if( Auth::check() )
        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-light action-button"  style="display:inline;cursor:pointer">
            Cerrar sesión
            </button>
        </form>
        @endif
        </div>
</nav>
