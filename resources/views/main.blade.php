@extends('layout')
@section('content')
    @include('components/navigation')

    @include('pages/header')
    @include('pages/explore')
    @include('pages/voice')
    @include('pages/experience')

    @include('components/announcements')

    @include('pages/partners')
    @include('pages/about')

    @include('components/contact_form')
    @include('components/pledge_form')
    @include('components/footer')
@endsection