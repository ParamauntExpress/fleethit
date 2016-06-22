@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('dashboard.menu')
    <div class="ui vertical stripe intro segment basicbg dashboard">
        <div class="ui container">
            <h1 class="ui header centered">Dashboard</h1>
            
            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
                @include('dashboard.' . $template)
            @elseif(Auth::user()->role == 'driver')
                <h2>{{ ucfirst(Auth::user()->role) }}</h2>
            @endif
        </div>
    </div>
@endsection
