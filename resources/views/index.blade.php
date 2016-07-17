@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('main.menu')
    @include('index.baner')
    @include('index.cars')
    {{-- @include('index.infograph') --}}
    {{-- @include('index.services') --}}
    {{-- @include('index.works') --}}
    {{-- @include('index.video') --}}
    {{-- @include('index.feedback') --}}
    {{-- @include('index.faq') --}}
    {{-- @include('index.join') --}}
    @include('main.footer')
    @include('main.copyright')
    
    @include('register.modal')
@endsection
