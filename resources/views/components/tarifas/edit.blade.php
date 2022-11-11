<h1>Edit</h1>
<form action="{{url('tarifa/'.$tarifa->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="custo_retirada">custo_retirada</label>
        <input type="number"
        id="custo_retirada"
        name="custo_retirada"
        value="{{$tarifa->custo_retirada}}"
        placeholder="Insira a custo_retirada"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="custo_operacao">custo_operacao</label>
        <input type="number"
        id="custo_operacao"
        name="custo_operacao"
        value="{{$tarifa->custo_operacao}}"
        autocomplete="custo_operacao"
        placeholder="Insira o custo_operacao"
        class="form-control"
        required>
    </div>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>