<h1>Create</h1>
<form action="{{url('lme')}}" method="post">
    @crsf
    <div class="form-group">
        <label for="name">Data</label>
        <input type="date"
        id="data"
        name="data"
        autocomplete="data"
        placeholder="Insira a data"
        class="form-control"
        required>
    </div>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>