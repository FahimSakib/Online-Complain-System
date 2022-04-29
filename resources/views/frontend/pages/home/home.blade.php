@extends('frontend.layouts.app')

@section('content')
    {{-- <main class="main"> --}}
    @include('frontend.pages.home.sections.learning')
    @include('frontend.pages.home.sections.course')
    @include('frontend.pages.home.sections.about-top')
    @include('frontend.pages.home.sections.events')
    @include('frontend.pages.home.sections.testimonial')
    @include('frontend.pages.home.sections.blog')
    @include('frontend.pages.home.sections.sponsor')
    
@endsection