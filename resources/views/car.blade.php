@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('dashboard.menu')
    <div class="ui vertical stripe intro segment basicbg dashboard">
        <div class="ui container">
            <h1 class="ui header centered">
                @if(empty($car))
                    Create Car
                @else
                    Edit Car-ID {{ $car->id }}
                @endif
            </h1>
            
            <div class="ui segment">
                @if(empty($car))
                    @include('car.create')
                @else
                    @include('car.edit', ['car' => $car])
                @endif
            </div>
        </div>
    </div>
@endsection
