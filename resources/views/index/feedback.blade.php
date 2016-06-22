<div class="ui vertical stripe intro segment">
    <div class="ui container">
        <h1 class="ui header centered">Our members make real money</h1>
        <div class="ui centered cards">
            @include('index.feed', [
                'image' => "/img/elliot.jpg",
                'name' => "ALAN G.",
                'car' => "2015 Silver Toyota Prius",
                'text' => "I needed to survive. As a recent graduate, I needed to become financially independent. I'm happy to say I now live with my girlfriend in our own place in the East Bay thanks to FleetHit!",
                'money' => "1104"
            ])
            @include('index.feed', [
                'image' => "/img/elliot.jpg",
                'name' => "PAUL B.",
                'car' => "2015 Silver Toyota Prius",
                'text' => "FleetHit gave me the freedom to make money during the Summer, which is usually the hardest time for me to earn money as a substitute teacher.",
                'money' => "1288"
            ])
            @include('index.feed', [
                'image' => "/img/elliot.jpg",
                'name' => "RICHARD T.",
                'car' => "2015 Gray Toyota Prius",
                'text' => "FleetHit gave me the flexibility to design my life around work and other responsibilities. I drive when I want, to make the money I want.",
                'money' => "1391"
            ])
        </div>
    </div>
</div>