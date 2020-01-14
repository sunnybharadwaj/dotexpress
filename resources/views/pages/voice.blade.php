<section id="voice">
    @include('snippets.modals.voice_modal')
    <div class="section-wrapper">
        <div class="section-intro">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="text w-full lg:w-7/12">
                        <div class="content-wrapper max-w-lg">
                            <div class="title">
                                <div class="blob">
                                    @include('snippets/blob2')
                                </div>
                                <h2 class="h1 font-normal">Voice</h2>
                            </div>
                            <div class="quote max-w-md">
                                <h3 class="font-normal">My voice is important because I am the future.</h3>
                            </div>
                            <div class="desc">
                                <p class="hl">
                                    A space for children to express original ideas through creative writing, art and stories
                                    that reflect their view of the world and provide an impetus for change.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="video w-full lg:w-5/12">
                        <div class="content-wrapper">
                            <div class="img-wrapper">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="voice-posts mt-8">
                <div class="py-8 lg:py-12">
                    <div class="container">
                        <div class="heading">
                            <div class="content-wrapper text-center">
                                <h3 class="h4 my-4">
                                    Topic: Who’s your woman role model?
                                </h3>
                                <h4 class="hl mb-4 opacity-50">Here's what you've submitted</h4>
                            </div>
                        </div>

                        <div class="posts py-4">
                            <div class="text-center hl">

                            </div>
                            <div class="flex flex-wrap">
                                <div class="post primary w-full lg:w-1/3">
                                    <div class="content">
                                        <div class="image">
                                            <div class="img-wrapper">
                                                <img src="/static/voice/posts/essay.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <div class="post-header">
                                                <h5 class="mr-2 small inline-block">Essay</h5>
                                                <div class="small font-bold inline-block">Adhya Kartik</div>
                                            </div>
                                            <div class="post-title">
                                                Rising Like a Phoenix

                                            </div>
                                            <div class="post-desc small">
                                                Arunima Sinha. Does this name ring a bell? Well, truth be told, I hadn’t heard of
                                                her myself until very recently. Arunima Sinha is a former national volleyball
                                                player…mountaineer and the first lady to climb Mount Everest, despite her
                                                disability.
                                            </div>
                                            <div class="post-links">
                                                <a href="" class="text-btn sm">
                                                    Continue reading
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="post secondary w-full lg:w-1/3">
                                    <div class="content">
                                        <div class="image">
                                            <div class="img-wrapper">
                                                <img src="/static/voice/posts/gallery.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <div class="post-header">
                                                <h5 class="mr-2 small inline-block">Artwork</h5>
                                                <div class="small font-bold inline-block">Adhya Kartik</div>
                                            </div>
                                            <div class="post-title">
                                                Jhansi Lakshmi Bai
                                            </div>

                                            <div class="post-links">
                                                <a href="" class="text-btn sm">

                                                    View Artwork
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="post secondary  w-full lg:w-1/3">
                                    <div class="content">
                                        <div class="image">
                                            <div class="img-wrapper">
                                                <img src="/static/voice/posts/podcast.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <div class="post-header">
                                                <h5 class="mr-2 small inline-block">Podcast</h5>
                                                <div class="small font-bold inline-block">Sahana Mallipudi</div>
                                            </div>
                                            <div class="post-title">
                                                Mary Kom
                                            </div>

                                            <div class="post-links">
                                                <a href="https://open.spotify.com/show/4VPSGE1SRQ9ek8oq9mygGl?si=t1qW4cOrQVGAH5-jGs2LJQ" target="_blank" class="text-btn sm">
                                                    Listen on Spotify
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center hidden">
                                <div class="text-btn lg loud ">
                                    View More
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="cta py-16">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="text w-full lg:w-5/12">
                        <div class="max-w-md">
                            <div class="content-wrapper py-12 lg:px-12">
                                <h3 class="mb-4">Here’s your <br/>Golden Ticket!</h3>
                                <p class="">
                                    <span class="font-bold">Raise your voice, Speak your true language!</span> Submit an original essay, poem, artwork as a story based on the topic to have your work
                                    featured here.
                                </p>
                                <p>

                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="ticket w-full lg:w-7/12">
                        <div class="image-container">
                            <img class="mx-auto " src="/static/voice/ticket.png" alt="">
                        </div>
                        <div class="content-wrapper relative lg:absolute">

                            <div class="lg:max-w-sm mx-auto text-center">
                                <h5 class="small">
                                    Next Topic
                                </h5>
                                <div class="topic-statement">
                                    <div class="h4 font-bold">
                                        What changes does India need right now?
                                    </div>
                                </div>

                                <a class="cta-btn">

                                    <a href="/forms/submission" class="text-btn loud">
                                        Submit Work
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>