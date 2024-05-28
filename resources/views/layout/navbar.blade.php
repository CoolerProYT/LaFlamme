<nav class="sticky-top col-12">
    <div class="container d-flex justify-content-between">
        <ul>
            <li class="logo"><a href="#home"><img src="{{ asset('img/logo.png') }}"></a></li>
        </ul>
        <ul class="d-none d-lg-flex">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contactus" style="white-space: nowrap">Contact Us</a></li>
            <li><a href="#location">Location</a></li>
        </ul>
        <div class="d-lg-none d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><img src="{{ asset('icon/menu.svg') }}" style="width: 40px"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse d-lg-none" id="mynavbar">
        <ul class="navbar-nav me-auto">
            <li class="nav-item"><a href="#home">Home</a></li>
            <li class="nav-item"><a href="#about">About</a></li>
            <li class="nav-item"><a href="#events">Events</a></li>
            <li class="nav-item"><a href="#gallery">Gallery</a></li>
            <li class="nav-item"><a href="#contactus" style="white-space: nowrap">Contact Us</a></li>
            <li class="nav-item"><a href="#location">Location</a></li>
        </ul>
    </div>
</nav>
<script src="{{ asset('js/navbar.js') }}"></script>
