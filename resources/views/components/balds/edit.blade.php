
<h1>Editar Baldeação</h1>



<form method="POST" action="{{ url('bald/'. $bald->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="estado_nemesis">Estado</label>
        <select class="form-select" name ="estado_nemesis_bald_id" id="estado_nemesis_bald_id" aria-label="Default select example">
            <option selected>{{$bald->estado_nemesis_bald_id}}</option>
            @foreach($estados as $estado)
                <option value="{{ $estado->id}}">
                    {{$estado->descricao}}
                </option>
            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="data_estado_global_bald">Data Estado</label>
        <input
            type="date"
            id="data_estado_global_bald"
            name="data_estado_global_bald"
            class="form-control
                                    @error('data_estado_global_bald') is-invalid @enderror"
            value="{{$bald->data_estado_global_bald}}"
            required
            aria-describedby="nameHelp">
    </div>

    <div class="form-group">
        <label for="data_envio_proj_sp_bald">Data Estado </label>
        <input
            type="date"
            id="data_envio_proj_sp_bald"
            name="data_envio_proj_sp_bald"
            class="form-control
                                    @error('data_envio_proj_sp_bald') is-invalid @enderror"
            value="{{$bald->data_envio_proj_sp_bald}}"
            required
            aria-describedby="nameHelp">
    </div>

    <div class="form-group">
        <label for="data_real_p_bald">Data Realização Projeto </label>
        <input
            type="date"
            id="data_real_p_bald"
            name="data_real_p_bald"
            class="form-control
                                    @error('data_real_p_bald') is-invalid @enderror"
            value="{{$bald->data_real_p_bald}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_plan_p_bald">Data Planeada Projeto </label>
        <input
            type="date"
            id="data_plan_p_bald"
            name="data_plan_p_bald"
            class="form-control
                                    @error('data_plan_p_bald') is-invalid @enderror"
            value="{{$bald->data_plan_p_bald}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_real_c_bald">Data Realização Construção </label>
        <input
            type="date"
            id="data_real_c_bald"
            name="data_real_c_bald"
            class="form-control
                                    @error('data_real_c_bald') is-invalid @enderror"
            value="{{$bald->data_real_c_bald}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_plan_c_bald">Data Planeada Construção </label>
        <input
            type="date"
            id="data_plan_c_bald"
            name="data_plan_c_bald"
            class="form-control
                                    @error('data_plan_c_bald') is-invalid @enderror"
            value="{{$bald->data_plan_c_bald}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_real_cadastro_bald">Data Realização Cadastro </label>
        <input
            type="date"
            id="data_real_cadastro_bald"
            name="data_real_cadastro_bald"
            class="form-control
                                    @error('data_real_cadastro_bald') is-invalid @enderror"
            value="{{$bald->data_real_cadastro_bald}}"
            required
            aria-describedby="nameHelp">
    </div>



    <div class="form-group">
        <label for="data_plan_cadastro_bald">Data Planeada Cadastro </label>
        <input
            type="date"
            id="data_plan_cadastro_bald"
            name="data_plan_cadastro_bald"
            class="form-control
                                    @error('data_plan_cadastro_bald') is-invalid @enderror"
            value="{{$bald->data_plan_cadastro_bald}}"
            required
            aria-describedby="nameHelp">
    </div>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Editar</button>
</form>
