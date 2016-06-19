@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('main.menu')
    @include('index.baner')
    @include('index.cars')
    @include('index.infograph', ['style' => 'bg gray'])
    @include('index.services')
    @include('index.join')
    @include('main.footer')
    @include('main.copyright')
@endsection
