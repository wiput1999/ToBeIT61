<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ route('dashboard') }}">ToBeIT'61</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" aria-controls="mainnav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainnav">
        <ul class="navbar-nav">
            <li class="nav-item {{ \Request::is('backend/dashboard') ? 'active':'' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item {{ \Request::is('backend/list/1') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('/backend/list/1') }}">Round 1</a>
            </li>
            {{--<li class="nav-item {{ \Request::is('backend/list/2') ? 'active':'' }}">--}}
                {{--<a class="nav-link" href="{{ url('/backend/list/2') }}">Round 2</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item {{ \Request::is('backend/list/3') ? 'active':'' }}">--}}
                {{--<a class="nav-link" href="{{ url('/backend/list/3') }}">Round 3</a>--}}
            {{--</li>--}}
            <li class="nav-item {{ \Request::is('backend/walkin/1') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('/backend/walkin/1') }}">Walk-in Round 1</a>
            </li>
            {{--<li class="nav-item {{ \Request::is('backend/walkin/2') ? 'active':'' }}">--}}
                {{--<a class="nav-link" href="{{ url('/backend/walkin/2') }}">Walk-in Round 2</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item {{ \Request::is('backend/walkin/3') ? 'active':'' }}">--}}
                {{--<a class="nav-link" href="{{ url('/backend/walkin/3') }}">Walk-in Round 3</a>--}}
            {{--</li>--}}
            <li class="nav-item {{ \Request::is('backend/walkin/new') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('/backend/walkin/new') }}">Add Walk-in</a>
            </li>
            <li class="nav-item {{ \Request::is('backend/visitor') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('/backend/visitor') }}">Visitors</a>
            </li>
            <li class="nav-item {{ \Request::is('backend/visitor/new') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('/backend/visitor/new') }}">Add Visitor</a>
            </li>
            <li class="nav-item {{ \Request::is('backend/checkout/1') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('/backend/checkout/1') }}">Checkout 1</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ \Request::is('backend/changepassword') ? 'active':'' }}">
                <a href="{{ url('/backend/changepassword') }}" class="nav-link">Change Password</a>
            </li>
            <li class="nav-item {{ \Request::is('backend/config') ? 'active':'' }}">
                <a href="{{ url('/backend/config') }}" class="nav-link">Config</a>
            </li>
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