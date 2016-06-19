@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('main.menu')
    @include('register.form')
    @include('main.footer')
    @include('main.copyright')
@endsection
