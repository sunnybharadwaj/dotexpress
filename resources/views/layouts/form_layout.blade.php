@extends('layouts/site')
@section('content')


    <div id="form-page">
        <div class="container">

            <div class="lg:p-10"></div>

            <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 form-menu">
                    <div class="menu">
                        <div class="form-menu-logo">
                            <a href="/" class="max-w-4xl ">
                                <div class="logo max-w-sm  pt-4">
                                    @include ('snippets/logo')
                                </div>
                            </a>
                        </div>
                        <ul class="form-menu-list">
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