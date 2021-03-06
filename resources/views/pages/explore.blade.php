<section id="explore">
    <div class="section-wrapper">
        <div class="section-intro">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="text w-full lg:w-7/12">
                        <div class="content-wrapper max-w-lg">
                            <div class="title">
                                <div class="blob">
                                    @include('snippets/blob1')
                                </div>
                                <h2 class="h1 font-normal">Explore</h2>
                            </div>
                            <div class="quote max-w-sm">
                                <h3 class="font-normal">I will learn what it takes, to get where I want</h3>
                            </div>
                            <div class="desc">
                                <p class="hl">
                                    A space for children to explore new content from experts, inform their ideas, think
                                    deeper and apply it to problems they want to solve.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="explore-video-link" class="video w-full lg:w-5/12">
                        <div class="content-wrapper">
                            <div style="--aspect-ratio: 16/9;">
                                <iframe src="https://www.youtube.com/embed/Eqxy-FpvMY0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="post-link text-btn sm text-right w-full pr-2">
                                <a href="https://www.youtube.com/channel/UC_8UWRqXxVvLFiQ175IzgKw" target="_blank">View more on our Youtube Channel</a>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <div class="book pt-10 lg:pt-16">
            <div class="intro container">
                <div class="heading">
                    <div class="content-wrapper text-center">
                        <h3 class="h5 loud-title">Book</h3>
                        <div class="title h3 mb-8">
                            The Dot that Went For a Walk
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap py-4">
                    <div class="img-w-bg w-full lg:w-5/12">
                        <div class="content-wrapper">
                            <div class="blob"></div>
                            <div class="img-wrapper ">
                                <img class="book-img" src="/static/explore/book_image.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="text w-full lg:w-7/12">
                        <div class="content-wrapper">
                            <div class="lg:pl-16">
                                <div class="max-w-lg">
                                    <p class="hl font-bold mb-4">A children's book with 51 illustrated stories that celebrate
                                        extraordinary women from
                                        India including artists, scientists, healers, entrepreneurs, politicians, rocket
                                        women
                                        of India, women in sports and a commando trainer.</p>
                                </div>

                                <div class="max-w-xl">
                                    <p class="p mb-4">
                                        This book is about changing the
                                        narrative of storytelling, from fairy tales that have gender stereotypes with female
                                        characters portrayed as damsels in distress to stories of real women role models.
                                    </p>
                                    <p class="mb-2">
                                        The
                                        stories are complemented with beautiful artworks by 51 leading and aspiring women
                                        artists who have each represented the role models in their styles and in diverse
                                        mediums
                                        like fabric, paper, oils etc.
                                    </p>
                                </div>

                                <a  id="testimonials-btn" class="std-btn primary">
                                    Testimonials
                                </a>

                                <a  id="media-btn" class="std-btn primary">
                                    Media
                                </a>

                                <a href="https://www.amazon.in/that-went-walk-Short-Stories/dp/8193926005" target="_blank" class="std-btn primary">
                                    Buy Book
                                </a>

                                <div id="testimonials-modal" class="">
                                    @include ('overlays/testimonials')
                                </div>

                                <div id="media-modal" class="">
                                    @include ('overlays/media')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="preview">
                <div class="content-wrapper hidden md:block">
                    <h5 class="p">Preview</h5>
                    <div id="deepika-preview-slide" class="preview-slide book-slide hidden">
                        <img class="mx-auto" src="/static/explore/preview/deepika.jpg" alt="Janaki Ammal">
                    </div>
                    <div id="janaki-preview-slide" class="preview-slide book-slide hidden">
                        <img class="mx-auto" src="/static/explore/preview/janaki_ammal.jpg" alt="Janaki Ammal">
                    </div>
                    <div id="indira-preview-slide" class="preview-slide book-slide hidden">
                        <img class="mx-auto" src="/static/explore/preview/indra_nooyi.jpg" alt="Janaki Ammal">
                    </div>

                    <div id="kalpana-preview-slide" class="preview-slide book-slide ">
                        <img class="mx-auto" src="/static/explore/preview/kalpana.jpg" alt="Janaki Ammal">
                    </div>
                    <div class="book-menu">
                        <div class="flex flex-wrap max-w-2xl mx-auto">
                            <div class="flex-wrapper w-full md:w-1/4">
                                <div id="kalpana-preview-link" class="text-btn preview-link book-link active">
                                    Kalpana Chawla
                                </div>
                            </div>
                            <div class="flex-wrapper w-full md:w-1/4">
                                <div id="indira-preview-link" class="text-btn preview-link book-link">
                                    Indra Nooyi
                                </div>
                            </div>
                            <div class="flex-wrapper w-full md:w-1/4">
                                <div id="deepika-preview-link" class="text-btn preview-link book-link ">
                                    Deepika Padukone
                                </div>
                            </div>
                            <div class="flex-wrapper w-full md:w-1/4">
                                <div id="janaki-preview-link" class="text-btn preview-link book-link">
                                    Janaki Ammal
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="book-testimonials hidden">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            asdf
                        </div>
                        <div class="hidden swiper-slide">
                            <div class="content-wrapper quote-content">
                                <div class="icon"></div>
                                <div class="text">
                                    <div class="author h5 small">Tincidunt Venenatis - Orci Posuere</div>
                                    <div class="quote h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                        tincidunt venenatis nibh, at aliquam orci ipsum dolor sit amet posuere vel.
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            asdf
                        </div>
                        <div class="hidden swiper-slide">
                            <div class="content-wrapper quote-content">
                                <div class="icon"></div>
                                <div class="text">
                                    <div class="author h5 small">Tincidunt Venenatis - Orci Posuere</div>
                                    <div class="quote h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                        tincidunt venenatis nibh, at aliquam orci ipsum dolor sit amet posuere vel.
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            asdf
                        </div>
                        <div class="hidden swiper-slide">
                            <div class="content-wrapper quote-content">
                                <div class="icon"></div>
                                <div class="text">
                                    <div class="author h5 small">Tincidunt Venenatis - Orci Posuere</div>
                                    <div class="quote h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                        tincidunt venenatis nibh, at aliquam orci ipsum dolor sit amet posuere vel.
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>

            <div class="low-cost py-8 lg:py-16">
                <div class="container">
                    <div class="content-wrapper">
                        <div class="flex flex-wrap">
                            <div class="img-w-bg w-full lg:w-5/12">
                                <div class="content-wrapper">
                                    <div class="blob"></div>
                                    <div class="img-wrapper">
                                        <img src="/static/announcements/womenday_telugu.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="text w-full lg:w-7/12">
                                <div class="content-wrapper">
                                    <div class="max-w-2xl lg:pl-10">
                                        <h4 class="font-bold mb-4"><span class="inline-block">Change the narrative and help instill confidence in the next generation of students</span></h4>
                                        <p class="mb-2">Remind girls of their inner strength, courage and ability to dream through the stories of 51 extraordinary Indian women, written in Telugu! </p>
                                        <p class="mb-2">
                                            Our larger vision is that every girl in every government school should have access to this book. Through these stories, we would like a girl child, to connect with these role models, be inspired by them, think of career possibilities and fight harder against self-doubt. Hence, we are translating the book into regional languages in low-cost print format.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center py-10 lg:py-16 bg-a1-l">
        <div class="container">
            <div class="max-w-3xl mx-auto">
                <p class="font-bold h4 mt-4">
                    Donate copies of The Dot That Went For A Walk, specially translated into Telugu to reach girls and students in their native tongue across all rural areas!
                </p>
                <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSeiCaxXHtuScJodZ0vYAEeSxCjgFx79SxB2fV6ydsbRrW4c2A/viewform?usp=sf_link" class="std-btn primary">
                    Donate Today
                </a>
            </div>
        </div>

    </div>
</section>