<nav class="nav">
    <div id="nav-icon1">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="container">
        <a href="/" class="b rand">
            <img src="{{asset('get_started/assets/logo.PNG')}}" alt="Logo">
        </a>

        <ul class="nav-links">
            <li class="nav-item">
                <a href="/">Home</a>
            </li>

            <li class="nav-item">
                <a href="#">About</a>
            </li>

            <li class="nav-item">
                <a href="#">Contact</a>
            </li>

            <li class="nav-item">
                <a href="/blog">Blog</a>
            </li>

            <li class="nav-item">
                <a href="/agent/signup">Agent</a>
            </li>
            <li class="nav-item">
                <a href="/farmer/register">Farmer</a>
            </li>
        </ul>
        <div class="auth">
            <a href="{{route('getstarted')}}" class="sign-btn open-modal">Get Started</a>
            <a href="/login" class="sign-btn">Login</a>
        </div>
    </div>

    <div class="mobile-nav">

        <a href="/" class="brand">
            <img src="{{asset('land/assets/logo.PNG')}}" alt="Logo">
        </a>

        <ul class="nav-links">
            <li class="nav-item">
                <a href="/">Home</a>
            </li>

            <li class="nav-item">
                <a href="#">About</a>
            </li>

            <li class="nav-item">
                <a href="/contact">Contact</a>
            </li>

            <li class="nav-item">
                <a href="/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a href="/farmers/register">Farmer</a>
            </li>
            <li class="nav-item">
                <a href="/agent/signup">Agent</a>
            </li>

        </ul>
        <div class="auth">
            <a href="{{route('getstarted')}}" class="sign-btn">Get Started</a>
            <a href="/login" class="sign-btn">Login</a>
        </div>
    </div>
</nav>