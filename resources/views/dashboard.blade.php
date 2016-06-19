@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('dashboard.menu')
    @include('dashboard.content')
@endsection
