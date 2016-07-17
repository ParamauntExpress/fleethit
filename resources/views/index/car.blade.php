<div class="card">
    <div class="content">
        <div class="meta">
            {{ $car->year }} Toyota Prius
        </div>
    </div>
    <div class="image img-shadow">
        @if(!empty($car->photos()->first()))
            <img class="ui wireframe image" src="{{ url('/car/photo', [$car->photos()->first()->name]) }}">
        @endif
    </div>
    <div class="content">
        <span class="left floated">Year</span>
        <span class="right floated"><b>{{ $car->year }}</b></span>
        <br>
        <span class="left floated">Mileage</span>
        <span class="right floated"><b>{{ $car->mileage }}</b></span>
        <br>
        <span class="left floated">VIN</span>
        <span class="right floated"><b>{{ $car->vin }}</b></span>
        <br>
        <span class="left floated">Color</span>
        <span class="right floated"><b>{{ $car->color }}</b></span>
        <br>
        <span class="left floated">Price</span>
        <span class="right floated"><b>$ {{ $car->price }}</b></span>
        <br>
    </div>
    <div class="extra content">
        <a href="{{ url('/detail', [$car->id]) }}" class="ui black button">Detail</a>
    </div>
</div>