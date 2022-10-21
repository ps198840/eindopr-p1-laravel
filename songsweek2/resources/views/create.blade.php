<p>Liedje Toevoegen</p>
<form action="{{ route('songs.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" placeholder="title">
    </div>
    <div class="form-group">
        <label for="singer">Singer</label>
        <input type="text" id="singer" name="singer" placeholder="singer">
    </div>
    <div>
        <button type="submit" >Versturen</button>
    </div>
</form>
