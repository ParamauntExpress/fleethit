<div class="ui vertical stripe intro segment basicbg regform">
    <div class="ui container">
        <h1 class="ui header centered">Register status</h1>
        <div class="ui segment">
            @if(empty($messages))
                <div class="ui success message">
                    <div class="header">
                        Your drever data registration was successful.
                    </div>
                    <p>We send you e-mail for detail registration. Please, check mail.</p>
                </div>
            @else
                <div class="ui error message">
                    <div class="header">
                        There was some errors with your registration.
                    </div>
                    <ul class="list">
                        @foreach ($messages as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <a href="/">Back and try again</a>
    </div>
</div>