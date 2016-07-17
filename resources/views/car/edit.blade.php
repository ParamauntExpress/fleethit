<form class="ui form" method="POST" action="{{ url('/car/edit', [$car->id]) }}" accept-charset="UTF-8" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="{{ $car->id }}" />
    <div class="field">
        <label>Year</label>
        <input type="number" name="year" placeholder="Year" value="{{ $car->year }}" />
    </div>
    <div class="field">
        <label>Mileage</label>
        <input type="number" name="mileage" placeholder="Mileage" value="{{ $car->mileage }}" />
    </div>
    <div class="field">
        <label>VIN</label>
        <input type="text" name="vin" placeholder="VIN" value="{{ $car->vin }}" />
    </div>
    <div class="field">
        <label>Color</label>
        <input type="text" name="color" placeholder="Color" value="{{ $car->color }}" />
    </div>
    <div class="field">
        <label>Notes</label>
        <textarea type="textarea" name="notes" placeholder="Notes">{{ $car->notes }}</textarea>
    </div>
    <div class="field">
        <label>Photos</label>
        @if($car->photos->count() > 0)
            <div class="ui small images">
                @foreach($car->photos as $photo)
                    <div style="display:inline-block;">
                        <img src="{{ url('car/photo', [$photo->name]) }}"><br/>
                        <div style="display:inline-block;">
                            <input style="margin-top:4px;margin-right:4px;" type="checkbox" name="remove[{{ $photo->id }}]"/>
                            <span style="font-size:12px">Remove</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <input type="file" name="photo[]" multiple />
    </div>
    <button class="ui button" type="submit">Submit</button>
    <div class="ui error message"></div>
</form>