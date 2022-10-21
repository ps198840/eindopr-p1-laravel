<p>Auto Toevoegen</p>
<form action="{{ route('cars.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="merk">Merk</label>
        <input type="text" id="merk" name="merk" placeholder="merk">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" id="type" name="type" placeholder="type">
    </div>
    <div class="form-group">
        <label for="bouwjaar">Bouwjaar</label>
        <input type="text" id="bouwjaar" name="bouwjaar" placeholder="bouwjaar">
    </div>
    <div>
        <button type="submit" >Versturen</button>
    </div>
</form>
