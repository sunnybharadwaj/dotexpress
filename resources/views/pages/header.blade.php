<header>
    <section id="header" class="mb-4 lg:mb-12">
        <div class="section-wrapper ">
            <div class="header-bg top-section">
                <div class="content-wrapper ">
                    <div class="header-text">
                        <div class="max-w-2xl mx-auto text-center hidden">
                            <p class="hl"></p>
                        </div>
                        <div class="max-w-4xl mx-auto text-center py-12 lg:py-20">
                            <div class="max-w-lg mx-auto pt-4 pb-2">
                                @include ('snippets/logo')
                            </div>
                            <h4 class="font-normal">A digital platform for the young generation to Explore new ideas, Voice their thoughts and build upon shared Experiences</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @if(session()->has('announcement'))
            <div class="announcement-notification notification hidden">
                <div class="content-wrapper mx-auto">
                    <div class="relative">
                        <div class="close-btn ">
                            <img src="/static/icons/icon_close_black.svg" alt="Close Announcements">
                        </div>

                        <h5 class="p text-center mt-2">Announcement</h5>
                        <div class="max-w-lg mx-auto text-center">
                            <div class="hl mb-2 font-bold">Join us at the Hyderabad Literary Festival 2020 for two very exciting workshops for children:
                            </div>
                            <div class="p mb-2">1. Design your own cover page (Jan 24, 12:00pm)</div>
                            <div class="p">2. Finding your Ikigai (Jan 25, 2:00pm)</div>

                            <div class="links">
                                <a href="https://www.hydlitfest.org/" target="_blank" class="text-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </section>
</header>