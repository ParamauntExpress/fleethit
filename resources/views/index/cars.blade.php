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
                <select style="width:auto;" class="ui dropdown" name="color" id="color">
                    <option value="">Color</option>
                    <option value="all">ALL</option>
                    @foreach($colors as $color)
                        <option value="{{ $color->color }}"
                        <?php if(\Request::get('color') == $color->color) {
                            echo 'selected = "selected"';
                        } ?>
                        >{{ $color->color }}</option>
                    @endforeach
                </select>
            </div>
            <div class="field">
                <select style="width:auto;" class="ui dropdown" name="sort" id="sort">
                    <option value="">Sort by</option>
                    <option value="nosort">With out Sort</option>
                    <option value="plh"
                    @if(\Request::get('sort') == 'plh')
                        selected = "selected"
                    @endif
                    >Price: Low to High</option>
                    <option value="phl"
                    @if(\Request::get('sort') == 'phl')
                        selected = "selected"
                    @endif
                    >Price: High to Low</option>
                    <option value="ylh"
                    @if(\Request::get('sort') == 'ylh')
                        selected = "selected"
                    @endif
                    >Year: Low to High</option>
                    <option value="yhl"
                    @if(\Request::get('sort') == 'yhl')
                        selected = "selected"
                    @endif
                    >Year: High to Low</option>
                </select>
            </div>
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