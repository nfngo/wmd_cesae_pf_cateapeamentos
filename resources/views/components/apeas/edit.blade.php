
<h1>Editar Apeamento</h1>




<form method="POST" action="{{ url('apea/'. $apea->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="estado_nemesis">Estado</label>
        <select class="form-select" name ="estado_nemesis_apea_id" id="estado_nemesis_apea_id" aria-label="Default select example">
            <option selected>{{$apea->estado_nemesis_apea_id}}</option>
            @foreach($estados as $estado)
                <option value="{{ $estado->id}}">
                    {{$estado->descricao}}
                </option>
            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="data_estado_global_apea">Data Estado</label>
        <input
            type="date"
            id="data_estado_global_apea"
            name="data_estado_global_apea"
            class="form-control
                                    @error('data_estado_global_apea') is-invalid @enderror"
            value="{{$apea->data_estado_global_apea}}"
            required
            aria-describedby="nameHelp">
    </div>

    <div class="form-group">
        <label for="data_envio_proj_sp_apea">Data Estado </label>
        <input
            type="date"
            id="data_envio_proj_sp_apea"
            name="data_envio_proj_sp_apea"
            class="form-control
                                    @error('data_envio_proj_sp_apea') is-invalid @enderror"
            value="{{$apea->data_envio_proj_sp_apea}}"
            required
            aria-describedby="nameHelp">
    </div>

    <div class="form-group">
        <label for="data_real_p_apea">Data Realização Projeto </label>
        <input
            type="date"
            id="data_real_p_apea"
            name="data_real_p_apea"
            class="form-control
                                    @error('data_real_p_apea') is-invalid @enderror"
            value="{{$apea->data_real_p_apea}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_plan_p_apea">Data Planeada Projeto </label>
        <input
            type="date"
            id="data_plan_p_apea"
            name="data_plan_p_apea"
            class="form-control
                                    @error('data_plan_p_apea') is-invalid @enderror"
            value="{{$apea->data_plan_p_apea}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_real_c_apea">Data Realização Construção </label>
        <input
            type="date"
            id="data_real_c_apea"
            name="data_real_c_apea"
            class="form-control
                                    @error('data_real_c_apea') is-invalid @enderror"
            value="{{$apea->data_real_c_apea}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_plan_c_apea">Data Planeada Construção </label>
        <input
            type="date"
            id="data_plan_c_apea"
            name="data_plan_c_apea"
            class="form-control
                                    @error('data_plan_c_apea') is-invalid @enderror"
            value="{{$apea->data_plan_c_apea}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_real_cadastro_apea">Data Realização Cadastro </label>
        <input
            type="date"
            id="data_real_cadastro_apea"
            name="data_real_cadastro_apea"
            class="form-control
                                    @error('data_real_cadastro_apea') is-invalid @enderror"
            value="{{$apea->data_real_cadastro_apea}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_plan_cadastro_apea">Data Planeada Cadastro </label>
        <input
            type="date"
            id="data_plan_cadastro_apea"
            name="data_plan_cadastro_apea"
            class="form-control
                                    @error('data_plan_cadastro_apea') is-invalid @enderror"
            value="{{$apea->data_plan_cadastro_apea}}"
            required
            aria-describedby="nameHelp">
    </div>


    <div class="form-group">
        <label for="tipo_cabos">Tipo de Cabos (PRIM/SEC)</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>{{$apea->tipo_cabos}}</option>
            <option>PRIM</option>
            <option>PRIM + SEC</option>
            <option>N/A</option>

        </select>
    </div>

    <div class="form-group">
        <label for="peso_cabos">Peso Cabo Apeamento (Kg)</label>
        <input
            type="text"
            class="form-control"
            id="peso_cabos"
            name="peso_cabos"
            value="{{$apea->peso_cabos}}">
    </div>
    <div class="form-group">
        <label for="faturado">Faturado</label>
        <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="faturado" type="radio" id="faturado" value="0"{{ $apea->faturado == "0" ? 'checked' : '' }}>
        <label class="form-check-label" for="inlineCheckbox1">Sim</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" name="faturado" type="radio" id="inlineCheckbox2" value="1" {{ $apea->faturado == "1" ? 'checked' : '' }}>
        <label class="form-check-label" for="inlineCheckbox2">Não</label>
    </div>
    </div>
    <br>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Editar</button>
</form>


