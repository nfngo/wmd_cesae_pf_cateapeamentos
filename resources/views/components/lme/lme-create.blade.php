<h1>Create</h1>
<form action="{{url('lme/create')}}" method="POST" enctype="multipart/form-data">
    @csrf
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
    <div class="form-group">
        <label for="name">usd_ton_cobre</label>
        <input type="decimal"
        id="usd_ton_cobre"
        name="usd_ton_cobre"
        autocomplete="usd_ton_cobre"
        placeholder="Insira o usd_ton_cobre"
        class="form-control">
    </div>
    <div class="form-group">
        <label for="usd_ton_chumbo">usd_ton_chumbo</label>
        <input type="decimal"
        id="usd_ton_chumbo"
        name="usd_ton_chumbo"
        autocomplete="usd_ton_chumbo"
        placeholder="Insira a usd_ton_chumbo"
        class="form-control">
    </div>
    <div class="form-group">
        <label for="rate_usd_euro">rate_usd_euro</label>
        <input type="decimal"
        id="rate_usd_euro"
        name="rate_usd_euro"
        autocomplete="rate_usd_euro"
        placeholder="Insira a rate_usd_euro"
        class="form-control">
    </div>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>