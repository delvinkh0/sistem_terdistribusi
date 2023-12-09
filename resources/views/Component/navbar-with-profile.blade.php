<header id="header">
    <nav>
        <div class="navigation-bar auth-done">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/img/SerenayaLogo.png') }}" alt="Serenaya Logo">
                </a>
            </div>

            <div class="navbar-links">
                <ul>
                    <li><a href="{{ route('home.index') }}">Beranda</a></li>
                    <li><a href="{{ route('home.self-assessment') }}">Self Assessment</a></li>
                    <li><a href="{{ route('home.technique') }}">Mindfulness</a></li>
                    <li>
                        <div class="dropdown-navbar">
                            <button class="profile-menu" onclick="toggleDropdown()">Profil <i class="bi bi-caret-down-fill"></i></button>
                            <div class="dropdown-content hide">
                                <a href="{{ route('profile.index') }}">Dashboard</a>
                                <a href="{{ route('auth.logout') }}" class="logout">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="hamburger-icon" onclick="changeIcon()">
                <i class="bi bi-list" id="hamburger" alt="hamburger icon"></i>
                <i class="bi bi-x-lg close" id="x-icon" alt="close icon"></i>
            </div>
        </div>
    </nav>
</header>
