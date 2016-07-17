@extends('layouts.page')

@section('head')
    @include('main.header')
@endsection

@section('body')
    @include('main.menu')
    <div class="ui vertical stripe intro segment basicbg dashboard">
        <div class="ui container">
            <h1 class="ui header centered">Car detail</h1>
            
            <div class="ui relaxed divided items">
                <div class="item">
                    <div class="ui medium images">
                    @foreach($car->photos as $photo)
                        
                            <a href="{{ url('/car/photo', [$photo->name]) }}" target="_blank">
                                <img src="{{ url('/car/photo', [$photo->name]) }}">
                            </a>
                        
                    @endforeach
                    </div>
                    <div class="content">
                        <!--<div class="header">Toyota Prius</div>-->
                        <!--<div class="meta">-->
                        <!--    <b><a>Year</a></b>-->
                        <!--    <a>{{ $car->year }}</a>-->
                        <!--</div>-->
                        <table class="ui very basic celled table">
                            <thead>
                                <tr><th colspan="2">Toyota Prius</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Year</b></td>
                                    <td>{{ $car->year }}</td>
                                </tr>
                                <tr>
                                    <td><b>Mileage</b></td>
                                    <td>{{ $car->mileage }}</td>
                                </tr>
                                <tr>
                                    <td><b>VIN</b></td>
                                    <td>{{ $car->vin }}</td>
                                </tr>
                                <tr>
                                    <td><b>Color</b></td>
                                    <td>{{ $car->color }}</td>
                                </tr>
                                <tr>
                                    <td><b>Price</b></td>
                                    <td>$ {{ $car->price }}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        {{ $car->notes }}
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
