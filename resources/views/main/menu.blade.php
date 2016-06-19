<div class="following bar">
    <div class="ui container">
        <div class="ui large secondary inverted pointing menu grid">
            <a class="toc item">
                <i class="sidebar icon"></i> Menu
            </a>
            <a href="/" class="active item">{{ env('APP_NAME') }}</a>
            <div class="right menu">
                <a href="#" class="item">How it works</a>
                <a href="#" class="item">About us</a>
                <a href="#" class="item">Contact us</a>
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
</div>