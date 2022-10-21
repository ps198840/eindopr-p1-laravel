<p>cars</p>
<ul>
    @isset($cars)
        @foreach($cars as $car)
            <a href="/cars/{{$car->autonummer}}">{{$car->merk}}&nbsp;{{$car->type}}</a><br>
        @endforeach
    @endisset
</ul>
