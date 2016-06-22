<div class="ui top attached tabular menu">
    <a href="{{ url('/dashboard/drivers') }}" class="item">Drivers</a>
    <a class="item active">Users</a>
</div>
<div class="ui bottom attached tab segment active">
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
                    <td><a href="{{ url('/user/edit', [$user->id]) }}"><i class="save icon"></i></a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6"></th>
            </tr>
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