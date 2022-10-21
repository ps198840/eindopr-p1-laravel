<p>songs</p>
<ul>
    @isset($songs)
            @foreach($songs as $song)
                <a href="/songs/{{$song->id}}">{{$song->title}}</a><br>
            @endforeach
    @endisset
</ul>
