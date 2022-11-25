<head>
    @vite('resources/css/app.css')
</head>
<p>Album wijzigen</p>
<form action="{{ route('albums.update', $album->id) }}" method="POST">
    @csrf
    @method('put')
    <input name="name" value="{{$album->name}}"/>
    <input name="year" value="{{$album->year}}"/>
    <input name="times_sold" value="{{$album->times_sold}}"/>
    <input type="submit" value="Wijzigen">
</form>
