<head>
    @vite('resources/css/app.css')
</head>
<body class="grid grid-cols-4 m-5">
<p class="text-xl col-start-1 text-4xl" >Album Toevoegen</p>
<div class="col-start-2">
    <form action="{{ route('albums.store') }}" method="POST" class="border border-b-amber-400 rounded flex flex-col p-3 m-0">
        @csrf
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="name">Name:</label class="col-span-2">
            <input class="col-span-5 border border-amber-600 rounded px-1" type="text" id="name" name="name" placeholder="name">
            <label> *</label>
        </div>
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="year">Year:</label>
            <input class="col-span-5 border border-amber-600 rounded px-1" type="text" id="year" name="year" placeholder="year">
        </div>
        <div class="form-group grid grid-cols-8 auto-cols-auto my-0.5 px-1">
            <label class="col-span-2" for="times_sold">Times Sold:</label>
            <input class="col-span-5 border border-amber-600 rounded px-1" type="text" id="times_sold" name="times_sold" placeholder="times sold">
            <label> **</label>
        </div>
        <div class="my-1">
            <button class="bg-amber-400 border border-amber-500 border rounded px-2" type="submit" >Versturen</button>
        </div>
        <p class="text-xs">* required</p>
        <p class="text-xs">** empty if still active</p>
    </form>
</div>
</body>
