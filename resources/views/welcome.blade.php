@extends('frontend.layout.app')

@section('title', 'Welcome to Tyro')
<link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/custom_navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/custom_banner.css') }}">

@section('content')
    @include('frontend.welcome_page.header')
    @include('frontend.welcome_page.banner')
    @include('frontend.welcome_page.hero')
    @include('frontend.welcome_page.stats')
    @include('frontend.welcome_page.features')
    @include('frontend.welcome_page.footer')
@endsection
