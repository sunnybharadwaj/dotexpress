<nav id="main-nav">

    <div class="nav-wrapper">
        <div class="flex items-center justify-between">
            <div class="left-block">
                <div class="logo hidden">
                    @include ('snippets/logo')
                </div>
                <div class="links">
                    <a href="#explore" id="explore-link" class="nav-link hl">
                        <span class="text">Explore</span>
                        <span class="blob">
                        @include('snippets/blob1')
                    </span>
                    </a>
                    <a href="#voice" id="voice-link" class="nav-link hl">
                        <span class="text">Voice</span>
                        <span class="blob">
                        @include('snippets/blob2')
                    </span>
                    </a>
                    <a href="#experience" id="experience-link" class="nav-link hl">
                        <span class="text">Experience</span>
                        <span class="blob">
                        @include('snippets/blob3')
                    </span>
                    </a>
                </div>
            </div>
            <div class="right-block mb-hidden">
                <a href="/forms/pledge" class="std-btn primary sm">
                    Pledge Support
                </a>
                <a href="https://www.amazon.in/that-went-walk-Short-Stories/dp/8193926005" target="_blank" class="std-btn primary sm">
                    Buy Book
                </a>
            </div>
        </div>
    </div>
</nav>