<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Gekozen album</p>
<div class="col-start-2 col-span-2">
    <form action="{{ route('albums.edit', $album->id) }}" method="POST" class="border border-b-amber-400 rounded flex flex-col p-3 m-0">
        @csrf
        <p>Name: {{$album->name}}</p>
        <p>Year: {{$album->year}}</p>
        <p>Times Sold: {{$album->times_sold}}</p>
        <input class="bg-amber-400 border border-amber-500 border rounded px-2" type="submit" value="Edit"/>
    </form><br>
</div>
</body>
