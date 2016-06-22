<div class="green card">
    <div class="centered">
        <img class="ui tiny circular image feedback" src="{{ $image }}">
    </div>
    <div class="content">
            <div class="header center aligned">{{ $name }}</div>
            <div class="meta center aligned">{{ $car }}</div>
            <div class="description center aligned">
                {{ $text }}
            </div>
    </div>
    <div class="extra content">
        <div class="ui two buttons">
            <div class="ui basic green button">
                Avg. weekly net earnings<br/>
                <h2>${{ $money }}</h2>
            </div>
        </div>
    </div>
</div>