<form class="ui form" method="POST" action="{{ url('/user/edit', [$user->id]) }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="{{ $user->id }}" />
    <div class="field">
        <label>Name</label>
        <input type="text" name="name" placeholder="First Name" value="{{ $user->name }}" />
    </div>
    <div class="field">
        <label>Email</label>
        <input type="email" name="email" placeholder="example@domain.com" value="{{ $user->email }}" />
    </div>
    <div class="field">
        <label>Role</label>
        <div class="ui selection dropdown">
            <input type="hidden" name="role" value="{{ $user->role }}">
            <i class="dropdown icon"></i>
            <div class="default text">Gender</div>
            <div class="menu">
                <div class="item" data-value="admin">Admin</div>
                <div class="item" data-value="manager">Manager</div>
                <div class="item" data-value="driver">Driver</div>
                <div class="item" data-value="user">User</div>
            </div>
        </div>
    </div>
    <button class="ui button" type="submit">Submit</button>
    <div class="ui error message"></div>
</form>