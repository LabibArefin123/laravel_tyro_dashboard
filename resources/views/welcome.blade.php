@extends('frontend.layout.app')

@section('title', 'Welcome to Tyro')

@section('content')

    @include('frontend.welcome_page.header')

    @include('frontend.welcome_page.hero')

    @include('frontend.welcome_page.footer')

@endsection
