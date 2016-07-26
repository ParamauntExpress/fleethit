@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('main.menu')
    <div class="ui vertical stripe intro segment basicbg dashboard">
        <div class="ui container">
            <h1 class="ui header centered">Contact us</h1>
            <div class="ui segment">
                <h3 class="ui header">
                    <a href="tel:+1-617-416-1700" style="color:black;">+1-617-416-1700</a><br/>
                    <a href="tel:+1-781-467-9734" style="color:black;">+1-781-467-9734</a>
                </h3>
            </div>
        </div>
    </div>
    @include('main.footer')
    @include('main.copyright')
@endsection
