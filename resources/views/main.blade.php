    @extends('layouts/site')
    @section('content')
        @include('components/navigation')

    @include('pages/header')
    @include('pages/explore')
    @include('pages/voice')
    @include('pages/experience')

    @include('pages/partners')
    @include('pages/about')

    {{--@include('components/contact_form')--}}
    {{--@include('components/pledge_form')--}}
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