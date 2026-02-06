@extends('frontend.layout.app')

@section('title', 'Welcome to Tyro')
<link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/custom_navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/custom_hero.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/custom_get_started.css') }}">

@section('content')
    @include('frontend.welcome_page.header')
    @include('frontend.welcome_page.hero')
    @include('frontend.welcome_page.get-started')
    @include('frontend.welcome_page.stats')
    @include('frontend.welcome_page.features')
    @include('frontend.welcome_page.footer')
@endsection
