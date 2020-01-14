@extends('layouts/site')
@section('content')


    <div id="form-page">
        <div class="container">
            <div class="max-w-4xl py-6 lg:py-12">
                <div class="max-w-sm  pt-4 pb-2">
                    @include ('snippets/logo')
                </div>
            </div>

            <div class="flex">
                <div class="w-full lg:w-4/12 form-menu">
                    <div class="menu">
                        <h5 class="small">Get in touch</h5>
                        <ul class="form-menu-list">
                            <li><a class="form-menu-btn" href="/forms/submission">Submit work</a></li>
                            <li><a class="form-menu-btn" href="/forms/pledge">Pledge Support</a></li>
                            <li><a class="form-menu-btn" href="/forms/contact">Contact Us</a></li>
                            <li><a href="/">Back Home</a></li>
                        </ul>
                    </div>
                </div>
                <div class="w-full lg:w-8/12 form-wrapper">
                    <div class="form-card">
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection