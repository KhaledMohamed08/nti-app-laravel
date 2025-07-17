<style>
    /* Base Reset */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html {
        font-size: 62.5%;
    }

    ul {
        list-style: none;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    /* Container */
    .container {
        max-width: 1200px;
        width: 90%;
        margin: auto;
    }

    /* Navbar */
    .navbar {
        position: fixed;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .navbar-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 70px;
    }

    /* Logo */
    .logo {
        font-size: 2.4rem;
        font-weight: bold;
        color: #117964;
    }

    /* Menu Items */
    .menu-items {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .menu-items li a {
        font-size: 2rem;
        font-weight: 500;
        color: #444;
        transition: color 0.3s;
    }

    .menu-items li a:hover {
        color: #117964;
    }

    /* Auth Area */
    .auth-area {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .auth-links,
    .auth-logged-in {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .welcome-msg {
        font-size: 2rem;
        color: #444;
    }

    .btn {
        font-size: 1.6rem;
        padding: 0.5rem 1rem;
        background-color: #117964;
        color: #fff;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #0e5f50;
    }

    /* Mobile Menu */
    #menu-toggle,
    .hamburger-lines {
        display: none;
    }

    @media (max-width: 768px) {
        .navbar-container {
            flex-wrap: wrap;
            height: auto;
            padding: 1rem 0;
        }

        #menu-toggle {
            display: none;
        }

        .hamburger-lines {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 25px;
            width: 30px;
            margin-right: auto;
            cursor: pointer;
        }

        .hamburger-lines .line {
            height: 4px;
            background-color: #333;
            border-radius: 2px;
        }

        .menu-items {
            flex-direction: column;
            align-items: flex-start;
            background: #fff;
            width: 100%;
            padding: 1rem 2rem;
            position: absolute;
            top: 70px;
            left: 0;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #menu-toggle:checked~.menu-items {
            transform: translateX(0);
        }

        .menu-items li {
            margin-bottom: 1.5rem;
        }

        .auth-area {
            display: none;
        }

        .auth-mobile {
            display: block;
            font-size: 1.4rem;
        }

        .auth-mobile span {
            font-size: 1.4rem;
            color: #117964;
        }
    }

    /* Mobile Hide Desktop Auth */
    @media (max-width: 768px) {

        .auth-links,
        .auth-logged-in {
            display: none;
        }
    }
</style>

<nav class="navbar">
    <div class="navbar-container container">
        <input type="checkbox" id="menu-toggle">
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>

        <h1 class="logo">Navbar</h1>

        <ul class="menu-items">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <!-- Desktop Auth -->
        <div class="auth-area">

            @auth
                <!-- Logged in -->
                <div class="auth-logged-in">
                    <span class="welcome-msg">Hello, <strong>{{ explode(' ', auth()->user()->name)[0] }}</strong></span>
                    {{-- <a href="#" class="btn">Logout</a> --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input class="btn" type="submit" style="border: none; cursor: pointer;" value="Logout">
                    </form>
                </div>
            @endauth

            @guest
                <!-- Logged out -->
                <div class="auth-links">
                    <a href="{{ route('login') }}" class="btn">Login</a>
                    <a href="{{ route('register') }}" class="btn">Register</a>
                </div>
            @endguest
        </div>
    </div>
</nav>
