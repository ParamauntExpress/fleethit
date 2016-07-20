<form class="ui form" method="POST" action="{{ url('/car/create') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="field">
        <label>Year</label>
        <input type="number" name="year" placeholder="Year" value="" />
    </div>
    <div class="field">
        <label>Mileage</label>
        <input type="number" name="mileage" placeholder="Mileage" value="" />
    </div>
    <div class="field">
        <label>VIN</label>
        <input type="text" name="vin" placeholder="VIN" value="" />
    </div>
    <div class="field">
        <label>Color</label>
        <input type="text" name="color" placeholder="Color" value="" />
    </div>
    <div class="field">
        <label>Price</label>
        <input type="number" name="price" placeholder="Price" value="{{ $car->price }}" />
    </div>
    <div class="field">
        <label>Notes</label>
        <textarea type="textarea" name="notes" placeholder="Notes" value=""></textarea>
    </div>
    <button class="ui button" type="submit">Submit</button>
    <div class="ui error message"></div>
</form>