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
        id="usd_ton_cobre"
        name="usd_ton_cobre"
        value="{{$lme->usd_ton_cobre}}"
        autocomplete="usd_ton_cobre"
        placeholder="Insira o usd_ton_cobre"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="name">usd_ton_chumbo</label>
        <input type="number"
        id="usd_ton_chumbo"
        name="usd_ton_chumbo"
        value="{{$lme->usd_ton_chumbo}}"
        autocomplete="usd_ton_chumbo"
        placeholder="Insira o usd_ton_chumbo"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="rate_usd_euro">rate_usd_euro</label>
        <input type="number"
        id="rate_usd_euro"
        name="rate_usd_euro"
        value="{{$lme->rate_usd_euro}}"
        autocomplete="rate_usd_euro"
        placeholder="Insira o rate_usd_euro"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="preco_venda_plastico">preco_venda_plastico</label>
        <input type="number"
        id="preco_venda_plastico"
        name="preco_venda_plastico"
        value="{{$lme->preco_venda_plastico}}"
        autocomplete="preco_venda_plastico"
        placeholder="Insira o preco_venda_plastico"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="preco_metal_kg_cabo_plastico">preco_metal_kg_cabo_plastico</label>
        <input type="number"
        id="preco_metal_kg_cabo_plastico"
        name="preco_metal_kg_cabo_plastico"
        value="{{$lme->preco_metal_kg_cabo_plastico}}"
        autocomplete="preco_metal_kg_cabo_plastico"
        placeholder="Insira o preco_metal_kg_cabo_plastico"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="lme_cobre_kg_plastico">lme_cobre_kg_plastico</label>
        <input type="number"
        id="lme_cobre_kg_plastico"
        name="lme_cobre_kg_plastico"
        value="{{$lme->lme_cobre_kg_plastico}}"
        autocomplete="lme_cobre_kg_plastico"
        placeholder="Insira o lme_cobre_kg_plastico"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="lme_chumbo_kg_plastico">lme_chumbo_kg_plastico</label>
        <input type="number"
        id="lme_chumbo_kg_plastico"
        name="lme_chumbo_kg_plastico"
        value="{{$lme->lme_chumbo_kg_plastico}}"
        autocomplete="lme_chumbo_kg_plastico"
        placeholder="Insira o lme_chumbo_kg_plastico"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="preco_venda_chumbo">preco_venda_chumbo</label>
        <input type="number"
        id="preco_venda_chumbo"
        name="preco_venda_chumbo"
        value="{{$lme->preco_venda_chumbo}}"
        autocomplete="preco_venda_chumbo"
        placeholder="Insira o preco_venda_chumbo"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="preco_metal_kg_cabo_chumbo">preco_metal_kg_cabo_chumbo</label>
        <input type="number"
        id="preco_metal_kg_cabo_chumbo"
        name="preco_metal_kg_cabo_chumbo"
        value="{{$lme->preco_metal_kg_cabo_chumbo}}"
        autocomplete="preco_metal_kg_cabo_chumbo"
        placeholder="Insira o preco_metal_kg_cabo_chumbo"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="lme_cobre_kg_chumbo">lme_cobre_kg_chumbo</label>
        <input type="number"
        id="lme_cobre_kg_chumbo"
        name="lme_cobre_kg_chumbo"
        value="{{$lme->lme_cobre_kg_chumbo}}"
        autocomplete="lme_cobre_kg_chumbo"
        placeholder="Insira o lme_cobre_kg_chumbo"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="lme_chumbo_kg_chumbo">lme_chumbo_kg_chumbo</label>
        <input type="number"
        id="lme_chumbo_kg_chumbo"
        name="lme_chumbo_kg_chumbo"
        value="{{$lme->lme_chumbo_kg_chumbo}}"
        autocomplete="lme_chumbo_kg_chumbo"
        placeholder="Insira o lme_chumbo_kg_chumbo"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="custo_mix">custo_mix</label>
        <input type="number"
        id="custo_mix"
        name="custo_mix"
        value="{{$lme->custo_mix}}"
        autocomplete="custo_mix"
        placeholder="Insira o custo_mix"
        class="form-control"
        readonly>
    </div>
    <div class="form-group">
        <label for="custo_venda">custo_venda</label>
        <input type="number"
        id="custo_venda"
        name="custo_venda"
        value="{{$lme->custo_venda}}"
        autocomplete="custo_venda"
        placeholder="Insira o custo_venda"
        class="form-control"
        readonly>
    </div>

    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>
