<?php $role = \Auth::user()->role ?>

<div class="ui vertical stripe intro segment basicbg dashboard">
    <div class="ui container">
        <h1 class="ui header centered">Dashboard</h1>
        @if($role == 'admin' || $role == 'manager')
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
                                <td><b>First name:</b> {{ $driver->first }}</td>
                                <td><b>Last name:</b> {{ $driver->last }}</td>
                                <td><b>License:</b> {{ $driver->license }}</td>
                                <td><b>Created at:</b> {{ $driver->created_at }}</td>
                                <td><a href="/sign/pdf/{{ $driver->id }}" target="_blank"><i class="file pdf outline icon"></i></a></td>
                            </tr>
                        @endforeach
                    </tboby>
                </table>
                {{ $drivers->render() }}
            </div>
            <div class="ui bottom attached tab segment" data-tab="users">
                <h3>Users</h3>
            </div>
        @elseif($role == 'driver')
            <h2>{{ ucfirst($role) }}</h2>
        @endif
    </div>
</div>