<!-- Navigation -->
<nav class="top-menu-container">
    <div class="logo-header">
        <a href="">
            <img src="https://cdn.pixabay.com/photo/2014/04/02/10/47/red-304573__340.png" alt="Logo personal portfolio"
                title="Logo personal portfolio" />
        </a>
    </div>

    <ul>
        <li>
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                Home
            </a>
        </li>
        <li>
            <a href="about" class="{{ request()->is('about/*') ? 'active' : '' }}">
                About
            </a>
        </li>
        <li>
            <a href="portfolio">Portfolio</a>
        </li>
        <li>
            <a href="contact">Contact</a>
        </li>
    </ul>
</nav>