@extends('layout.master')

@section('content')
    @include('layout.navbar')
    <div class="landing-page-container">
        <div id="home" class="landing-page-item">
            @include('public.home', ['background' => $background])
        </div>

        <div id="about" class="landing-page-item container mt-5">
            @livewire('public.about')
        </div>

        <div id="events" class="landing-page-item container mt-5">
            @livewire('public.events')
        </div>

        <div id="gallery" class="landing-page-item container mt-5">
            @livewire('public.gallery')
        </div>

        <div class="landing-page-item container mt-5">
            @livewire('public.reserve')
        </div>

        <div id="contactus" class="landing-page-item container mt-5">
            @livewire('public.contact-us')
        </div>

        <div id="location" class="landing-page-item container mt-5">
            @include('public.location')
        </div>
        @include('layout.footer')
    </div>
@endsection
