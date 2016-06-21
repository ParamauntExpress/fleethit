<div class="ui top attached tabular menu">
    <a class="item active" data-tab="drivers">Drivers</a>
    <a class="item" data-tab="users">Users</a>
</div>
<div class="ui bottom attached tab segment active" data-tab="drivers">
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
</div>
<div class="ui bottom attached tab segment" data-tab="users">
    <table class="ui celled table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Role</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->role }}</td>
                    <td>-</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6"></th>
            </tr>
        </tfoot>
    </table>
</div>