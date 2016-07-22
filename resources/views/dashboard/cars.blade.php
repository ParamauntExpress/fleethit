<div class="ui top attached tabular menu">
    <a class="item active">Cars</a>
    <a href="{{ url('/dashboard/users') }}" class="item">Users</a>
</div>
<div class="ui bottom attached tab segment active">
    <a href="/car/create">
        <button class="ui black basic button">Create car</button>
    </a>
    <form style="display:inline;" method="POST" action="/car/parse" accept-charset="UTF-8" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="field" style="display:inline;">
            <div class="ui action input">
                <input type="text" readonly placeholder="File">
                <input name="file" type="file" id="file">
                <div class="ui icon button">
                    <i class="cloud upload icon"></i>
                </div>
            </div>
        </div>
        <button class="ui green button" type="submit">Upload</button>
    </form>
    <form style="display:inline;" class="ui form" method="GET" action="/dashboard/cars" accept-charset="UTF-8">
        <div style="display:inline;" class="field">
            <input style="width:auto;" type="text" name="year" placeholder="Search Year"
            @if(!empty(\Request::get('year')))
                value="{{ \Request::get('year') }}"
            @endif
            />
        </div>
        <div style="display:inline;" class="field">
            <input style="width:auto;" type="text" name="vin" placeholder="Search VIN"
            @if(!empty(\Request::get('vin')))
                value="{{ \Request::get('vin') }}"
            @endif
            />
        </div>
        <div style="display:inline;" class="field">
            <input style="width:auto;" type="text" name="color" placeholder="Search Color"
            @if(!empty(\Request::get('color')))
                value="{{ \Request::get('color') }}"
            @endif
            />
        </div>
        <button class="ui green button" type="submit">Search</button>
    </form>
    <table class="ui celled table">
        <thead>
            <th>ID</th>
            <th>Year</th>
            <th>Mileage</th>
            <th>VIN</th>
            <th>Color</th>
            <th>Actions</th>
        </thead>
        <tboby>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->mileage }}</td>
                    <td>{{ $car->vin }}</td>
                    <td>{{ $car->color }}</td>
                    <td>
                        <a href="{{ url('/car/edit', [$car->id]) }}">
                            <i class="write icon"></i>
                        </a>
                        <a href="{{ url('/car/delete', [$car->id]) }}">
                            <i class="trash icon text float-right"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tboby>
        <tfoot>
            <tr><th colspan="6">
                @if($cars->lastPage() > 1)
                    <div class="ui right floated pagination menu">
                        {!! (new Landish\Pagination\SemanticUI($cars))->render() !!}
                    </div>
                @endif
            </th></tr>
        </tfoot>
    </table>
    @if(!empty($info))
        <div class="ui success message">
            <i class="close icon"></i>
            <div class="header">{{ $info['header'] }}</div>
            <p>{{ $info['message'] }}</p>
        </div>
    @endif
</div>