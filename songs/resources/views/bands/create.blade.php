<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Band Toevoegen</p>
<div class="col-start-2">
    <form action="{{ route('bands.store') }}" method="POST" class="border border-b-cyan-400 rounded flex flex-col p-3 m-0">
        @csrf
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="name">Name:</label class="col-span-2">
            <input class="col-span-5 border border-cyan-600 rounded px-1" type="text" id="name" name="name" placeholder="name">
            <label> *</label>
        </div>
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="genre">Genre:</label>
            <input class="col-span-5 border border-cyan-600 rounded px-1" type="text" id="genre" name="genre" placeholder="genre">
        </div>
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="founded">Founded:</label>
            <input class="col-span-5 border border-cyan-600 rounded px-1" type="text" id="founded" name="founded" placeholder="founded">
        </div>
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="active_till">Active Until:</label>
            <input class="col-span-5 border border-cyan-600 rounded px-1" type="text" id="active_till" name="active_till" placeholder="active_till">
            <label> **</label>
        </div>
        <div class="my-1">
            <button class="bg-cyan-400 border border-cyan-500 border rounded px-2" type="submit" >Versturen</button>
        </div>
        <p class="text-xs">* required</p>
        <p class="text-xs">** empty if still active</p>
    </form>
</div>
</body>
