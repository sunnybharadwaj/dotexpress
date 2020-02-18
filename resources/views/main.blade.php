    @extends('layouts/site')
    @section('content')

        {{--Intro Popup--}}
        <div class="modal-wrapper full-screen ">
            <div class="modal-container ">
                <div class="container">
                    <div class="relative">
                        <div class="close-icon close-btn">
                            <img src="/static/icons/icon_close_black.svg"
                                 alt="Close Announcements">
                        </div>
                    </div>
                    <div class="post-wrapper">
                        <div class="text-center">
                            <h5 class="mt-2 text-center">THIS WOMEN'S DAY, GIVE THE GIFT OF ENDLESS POSSIBILITIES!</h5>
                            <div class="img-wrapper">
                                <img class="w-full" src="/static/announcements/womenday_english.jpg" alt="">
                            </div>

                            <div class="max-w-2xl mx-auto">
                                <h4 class="font-bold mb-4"><span class="inline-block">Change the narrative within your organization</span></h4>






                                <p class="mb-2">
                                    Remind women in your company of their inner strength, courage and ability to achieve their dreams through the stories of 51 extraordinary Indian women.
                                </p>
                                <a href="https://www.amazon.in/that-went-walk-Short-Stories/dp/8193926005" class="std-btn primary" target="_blank">Purchase Today</a>
                            </div>

                        </div>
                    </div>
                    <div class="modal-btns text-center">
                        <div class="text-btn close-btn lg c-primary">Close
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components/navigation')
        @include('pages/header')
        @include('pages/explore')
        @include('pages/voice')
        @include('pages/experience')
        @include('pages/partners')
        @include('pages/about')
        @include('components/announcements')
        @include('components/footer')


    @if (session()->has('message'))
        <div class="notification ">
            <div class="content-wrapper mx-auto">
                <div class="relative">
                    <div class="close-btn ">
                        <img src="/static/icons/icon_close_black.svg" alt="Close Announcements">
                    </div>

                    <div class="h5 small text-center mt-2">Notification</div>
                    <div class="max-w-2xl mx-auto text-center pb-8">
                        <div class="hl ">Thank you for your submission. We will get back to you soon.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection