@if(!empty($scroll))
    <script>
        $(document).ready(function() {
            if ($('#{{ $scroll }}').length > 0) {
                var scrollTop = $('#{{ $scroll }}').offset().top;
                $(document).scrollTop(scrollTop);
            }
        });
    </script>
@endif
<div class="ui vertical stripe intro segment" id="block">
    <div class="ui container">
        <h1 class="ui header centered">Find a car</h1>
        <br/>
        <form style="max-width:none;" class="ui form center aligned grid" method="GET" action="/" accept-charset="UTF-8">
            <div class="field">
                <input style="width:auto;" type="number" name="year" placeholder="Year"
                @if(!empty(\Request::get('year')))
                    value="{{ \Request::get('year') }}"
                @endif
                />
            </div>
            <div class="field">
                <input style="width:auto;" type="text" name="color" placeholder="Color"
                @if(!empty(\Request::get('color')))
                    value="{{ \Request::get('color') }}"
                @endif
                />
            </div>
            <div class="field">
                <span>&nbsp;&nbsp;&nbsp;</span>
                <input style="width:auto;" type="number" name="price_from" placeholder="Price from"
                @if(!empty(\Request::get('price_from')))
                    value="{{ \Request::get('price_from') }}"
                @endif
                />
            </div>
            <div class="field">
                <input style="width:auto;" type="number" name="price_to" placeholder="Price to"
                @if(!empty(\Request::get('price_to')))
                    value="{{ \Request::get('price_to') }}"
                @endif
                />
            </div>
            <br/><br/>
            <div class="field">
                <button class="ui green button" type="submit">Search</button>
            </div>
        </form>
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