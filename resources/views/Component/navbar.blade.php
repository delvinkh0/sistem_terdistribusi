<header id="header">
    <nav>
        <div class="navigation-bar">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/img/SerenayaLogo.png') }}" alt="Serenaya Logo">
                </a>
            </div>

            <div class="navbar-links">
                <ul>
                    <li><a href="{{ route('home.index') }}">Beranda</a></li>
                    <li><a href="{{ route('home.self-assessment') }}">Self Assessment</a></li>
                    <li><a href="{{ route('home.techniqueguest') }}">Mindfulness</a></li>
                </ul>
            </div>

            <div class="login-register">
                <a href="{{ route('auth.index') }}" class="login">Login</a>
                <a href="{{ route('auth.register') }}" class="register">Get Started</a>
            </div>


            <div class="hamburger-icon" onclick="changeIcon()">
                <i class="bi bi-list" id="hamburger" alt="hamburger icon"></i>
                <i class="bi bi-x-lg close" id="x-icon" alt="close icon"></i>
            </div>
        </div>
    </nav>
</header>
