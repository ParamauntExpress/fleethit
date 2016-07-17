<div class="ui top attached tabular menu">
    <a href="{{ url('/dashboard/cars') }}" class="item">Cars</a>
    <a href="{{ url('/dashboard/users') }}" class="item">Users</a>
    <a class="item active">Drivers</a>
</div>
<div class="ui bottom attached tab segment active">
    <table class="ui celled table">
        <thead>
            <th>First name</th>
            <th>Last name</th>
            <th>License</th>
            <th>Created at</th>
            <th>Actions</th>
        </thead>
        <tboby>
            @foreach($drivers as $driver)
                <tr>
                    <td>{{ $driver->first }}</td>
                    <td>{{ $driver->last }}</td>
                    <td>{{ $driver->license }}</td>
                    <td>{{ $driver->created_at }}</td>
                    <td><a href="/sign/pdf/{{ $driver->id }}" target="_blank"><i class="file pdf outline icon"></i></a></td>
                </tr>
            @endforeach
        </tboby>
        <tfoot>
            <tr><th colspan="5">
                @if($drivers->lastPage() > 1)
                    <div class="ui right floated pagination menu">
                        {!! (new Landish\Pagination\SemanticUI($drivers))->render() !!}
                    </div>
                @endif
            </th></tr>
        </tfoot>
    </table>
    @if(!empty($info))
        <div class="ui success message">
            <i class="close icon"></i>
            <div class="header">{{ $info->header }}</div>
            <p>{{ $info->message }}</p>
        </div>
    @endif
</div>