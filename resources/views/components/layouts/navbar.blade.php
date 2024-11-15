<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid ">
        <a class="navbar-brand golden-text" href="index.html">
            <img src="{{ asset('uploads/logo/logo.png') }}" width="90" height="60" alt="AL Tayaba International">
        </a>
        <button class="navbar-toggler p-0 " type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <img src="{{ asset('themes/deepblack/img/icon/menu-hamburger.svg')}}" alt="hamburger image"
                width="30px" height="30px" />
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}" aria-current="page" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.plan') ? 'active' : '' }}" href="{{ route('home.plan') }}">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.about') ? 'active' : '' }}" href="{{ route('home.about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="blog.html">Promotions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <span class="navbar-text" id="pushNotificationArea">

            <!-- user panel -->
            <div class="notification-panel user-panel">
                <button class="dropdown-toggle">
                    <img src="{{ asset('themes/deepblack/img/icon/user.png')}}" class="user-image" alt="profile" />
                </button>
                <ul class="notification-dropdown user-dropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('home.login') }}">
                            <img src="{{ asset('themes/deepblack/img/icon/user.png')}}" alt="Login" />
                            <span class="golden-text">Login</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('home.register') }}">
                            <img src="{{ asset('themes/deepblack/img/icon/user.png')}}" alt="Register" />
                            <span class="golden-text">Register</span>
                        </a>
                    </li>
                </ul>
            </div>
        </span>
    </div>
</nav>