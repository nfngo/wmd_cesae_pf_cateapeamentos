<h1>Edit</h1>
<form action="{{url('lme/'.$lme->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="data">Data</label>
        <input type="date"
        id="data"
        name="data"
        value="{{$lme->data}}"
        placeholder="Insira a data"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="name">usd_ton_cobre</label>
        <input type="number"
        step=".01"
        id="usd_ton_cobre"
        name="usd_ton_cobre"
        value="{{$lme->usd_ton_cobre}}"
        autocomplete="usd_ton_cobre"
        placeholder="Insira o usd_ton_cobre"
        class="form-control">
    </div>
    <div class="form-group">
        <label for="name">usd_ton_chumbo</label>
        <input type="number"
        step=".01"
        id="usd_ton_chumbo"
        name="usd_ton_chumbo"
        value="{{$lme->usd_ton_chumbo}}"
        autocomplete="usd_ton_chumbo"
        placeholder="Insira o usd_ton_chumbo"
        class="form-control">
    </div>
    <div class="form-group">
        <label for="rate_usd_euro">rate_usd_euro</label>
        <input type="number"
        step=".01"
        id="rate_usd_euro"
        name="rate_usd_euro"
        value="{{$lme->rate_usd_euro}}"
        autocomplete="rate_usd_euro"
        placeholder="Insira o rate_usd_euro"
        class="form-control">
    </div>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>
