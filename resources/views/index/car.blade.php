<div class="card">
    <a class="content" href="{{ url('/detail', [$car->id]) }}">
        <div class="meta">
            {{ $car->year }} Toyota Prius
        </div>
    </a>
    <a class="image" href="{{ url('/detail', [$car->id]) }}">
        @if(!empty($car->photos()->first()))
            <img class="ui wireframe image" src="{{ url('/car/photo/thumb', [$car->photos()->first()->name]) }}">
        @endif
    </a>
    <a class="content" href="{{ url('/detail', [$car->id]) }}">
        <span class="left floated" style="color:black;">Year</span>
        <span class="right floated" style="color:black;"><b>{{ $car->year }}</b></span>
        <br>
        <span class="left floated" style="color:black;">Mileage</span>
        <span class="right floated" style="color:black;"><b>{{ $car->mileage }}</b></span>
        <br>
        <span class="left floated" style="color:black;">VIN</span>
        <span class="right floated" style="color:black;"><b>{{ $car->vin }}</b></span>
        <br>
        <span class="left floated" style="color:black;">Color</span>
        <span class="right floated" style="color:black;"><b>{{ $car->color }}</b></span>
        <br>
        <span class="left floated" style="color:black;">Trim</span>
        <span class="right floated" style="color:black;"><b>{{ $car->trim }}</b></span>
        <br>
        <span class="left floated" style="color:black;">Options</span>
        <span class="right floated" style="color:black;"><b>{{ $car->options }}</b></span>
        <br>
        <span class="left floated" style="color:black;">WAS</span>
        <span class="right floated" style="color:black;"><b>$ <s>{{ $car->price }}</s></b></span>
        <br>
        <span class="left floated" style="color:black;">NOW</span>
        <span class="right floated" style="color:red;"><b>$ {{ $car->sale }}</b></span>
        <br>
    </a>
    {{-- <div class="extra content">
        <a href="{{ url('/detail', [$car->id]) }}" class="ui black button">Detail</a>
    </div> --}}
</div>