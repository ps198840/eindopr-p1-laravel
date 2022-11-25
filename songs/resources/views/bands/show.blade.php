<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Gekozen band</p>
<div class="col-start-2 col-span-2">
    <form action="{{ route('bands.edit', $band->id) }}" method="POST" class="border border-b-cyan-400 rounded flex flex-col p-3 m-0">
        @csrf
        <p>Name: {{$band->name}}</p>
        <p>Genre: {{$band->genre}}</p>
        <p>Founded: {{$band->founded}}</p>
        <p>Active Until: {{$band->active_till}}</p>
        <input class="bg-cyan-400 border border-cyan-500 border rounded px-2" type="submit" value="Edit"/>
    </form><br>
</div>
</body>
