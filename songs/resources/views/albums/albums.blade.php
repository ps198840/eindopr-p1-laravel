<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl">Alle albums</p>
<div class="col-start-2 col-span-2">
    <ul>
        @isset($albums)
            @foreach($albums as $album)
                <form action="{{ route('albums.delete', $album->id) }}" method="POST" class="border border-b-amber-400 rounded flex justify-between p-3 m-0">
                    @csrf
                    @method('delete')
                    <a href="albums/{{$album->id}}" class="underline hover:text-amber-600">{{$album->name}}</a>&nbsp;
                    <input type="submit" value="Delete" class="underline hover:line-through hover:text-red-600"/>
                </form><br>
            @endforeach
        @endisset
    </ul>
</div>
</body>
