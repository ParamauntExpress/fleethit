@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('dashboard.menu')
    <div class="ui vertical stripe intro segment basicbg dashboard">
        <div class="ui container">
            <h1 class="ui header centered">Edit {{ $user->name }}</h1>
            
            <div class="ui segment">
                @include('user.edit', ['user' => $user])
            </div>
        </div>
    </div>
@endsection
