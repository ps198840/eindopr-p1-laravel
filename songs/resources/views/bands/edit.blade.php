<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Band Wijzigen</p>
<div class="col-start-2">
    <form action="{{ route('bands.update', $band->id) }}" method="POST" class="border border-b-cyan-400 rounded flex flex-col p-3 m-0">
        @csrf
        @method('put')
        <input class="col-span-5 border border-cyan-600 rounded px-1" name="name" value="{{$band->name}}"/>
        <input class="col-span-5 border border-cyan-600 rounded px-1" name="genre" value="{{$band->genre}}"/>
        <input class="col-span-5 border border-cyan-600 rounded px-1" name="founded" value="{{$band->founded}}"/>
        <input class="col-span-5 border border-cyan-600 rounded px-1" name="active_till" value="{{$band->active_till}}"/>
        <input class="bg-cyan-400 border border-cyan-500 border rounded px-2" type="submit" type="submit" value="Wijzigen">
    </form>
</div>
</body>
