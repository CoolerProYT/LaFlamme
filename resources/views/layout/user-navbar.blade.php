<nav class="sticky-top col-12">
    <div class="container d-flex justify-content-between">
        <ul>
            <li class="logo"><a href="{{ route('landing') }}"><img src="{{ asset('img/logo.png') }}"></a></li>
        </ul>
        <ul class="d-none d-lg-flex">
            @if(\Illuminate\Support\Facades\Auth::guard('web')->check())
                <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown">
                        {{ \Illuminate\Support\Facades\Auth::guard('web')->user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('user.booking') }}">Booking History</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                    </ul>
                </div>
            @else
                <li><a href="{{ route('user.login') }}" class="text-light">Login</a></li>
            @endif
        </ul>
        <div class="d-lg-none d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><img src="{{ asset('icon/menu.svg') }}" style="width: 40px"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse d-lg-none" id="mynavbar">
        <ul class="navbar-nav me-auto">
            @if(\Illuminate\Support\Facades\Auth::guard('web')->check())
                <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle text-light" data-bs-toggle="dropdown">
                        {{ \Illuminate\Support\Facades\Auth::guard('web')->user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('user.booking') }}">Booking History</a></li>
                        <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                    </ul>
                </div>
            @else
                <li><a href="{{ route('user.login') }}" class="text-light">Login</a></li>
            @endif
        </ul>
    </div>
</nav>
<script src="{{ asset('js/navbar.js') }}"></script>
