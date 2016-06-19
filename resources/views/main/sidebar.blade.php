<div class="ui vertical inverted sidebar menu left">
    <div class="item">
        <div class="header">Menu</div>
        <div class="menu">
            <a href="/" class="active item">{{ env('APP_NAME') }}</a>
            <a href="#" class="item">How it works</a>
            <a href="#" class="item">About us</a>
            <a href="#" class="item">Contact us</a>
        </div>
    </div>
    <div class="item">
        <div class="header">Auth</div>
        <div class="menu">
            @if(Auth::check())
                <a href="/dashboard" class="item">Dashboard</a>
                <a href="/logout" class="item">Logout</a>
            @else
                <a href="/login" class="item">Sign in</a>
                <a href="/register" class="item">Sign up</a>
            @endif
        </div>
    </div>
</div>