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
                    Do you have any questions? Please call us.
                    <br/><br/>
                    Please call:
                </h3>
                <h4>
                    +1-617-416-1700 Alex<br/>
                    +1-781-467-9734 Andrey
                </h4>
            </div>
        </div>
    </div>
    @include('main.footer')
    @include('main.copyright')
@endsection
