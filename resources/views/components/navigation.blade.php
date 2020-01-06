<nav id="main-nav">

    <div class="nav-wrapper">
        <div class="flex items-center justify-between">
            <div class="left-block">
                <div class="logo hidden">
                    @include ('snippets/logo')
                </div>
                <div class="links">
                    <a href="#explore" class="nav-link hl">
                        <span class="text">Explore</span>
                        <span class="blob">
                        @include('snippets/blob1')
                    </span>
                    </a>
                    <a href="#voice" class="nav-link hl">
                        <span class="text">Voice</span>
                        <span class="blob">
                        @include('snippets/blob2')
                    </span>
                    </a>
                    <a href="#experience" class="nav-link hl">
                        <span class="text">Experience</span>
                        <span class="blob">
                        @include('snippets/blob3')
                    </span>
                    </a>
                </div>
            </div>
            <div class="right-block">
                <div class="std-btn primary sm">
                    Pledge Support
                </div>
                <div class="std-btn primary sm">
                    Buy Book
                </div>
            </div>
        </div>
    </div>
</nav>