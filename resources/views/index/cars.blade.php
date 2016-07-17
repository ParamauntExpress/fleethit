<div class="ui vertical stripe intro segment">
    <div class="ui container">
        <h1 class="ui header centered">Find a car</h1>
    </div>
    <div class="ui hidden divider"></div>
    <div class="ui stackable very relaxed center aligned grid container">
        <div class="row">
            <div class="ui link cards centered">
                @foreach($cars as $car)
                    @include('index.car')
                @endforeach
            </div>
        </div>
    </div>
</div>