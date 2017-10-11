<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ route('dashboard') }}">ToBeIT'61</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" aria-controls="mainnav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainnav">
        <ul class="navbar-nav">
            <li class="nav-item {{ route('dashboard') ? 'active':'' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Round 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Round 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Round 3</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                    <span class="oi oi-account-logout"></span> Logout
                </a>

                {{--Hidden logout action--}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>