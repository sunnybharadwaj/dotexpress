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
@endsection