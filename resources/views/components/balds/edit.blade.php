<div class="w-100 min-vh-100 p-4 mt-5">
    <div class="row">
        <div class="col-12">
            <p class="my-4 text-uppercase fs-5">Editar Baldeação</p>
            <div class="row mt-5 px-3 text-color-light-blue">
                <div class="col-12 col-sm-3 d-flex flex-column">
                    <span class="fw-semibold">Ref. Externa</span>
                    <p>{{$bald->ref_externa->id}}</p>
                </div>
                <div class="col-12 col-sm-3">
                    <span class="fw-semibold">Central</span>
                    <p>{{$bald->ref_externa->acl_id}}</p>
                </div>
                <div class="col-12 col-sm-2">
                    <span class="fw-semibold">IAN IAS</span>
                    <p>{{$bald->ref_externa->acl->ian_ias}}</p>
                </div>
                <div class="col-12 col-sm-2">
                    <span class="fw-semibold">OCR</span>
                    <p>{{$bald->ref_externa->acl->ifr}}</p>
                </div>
                <div class="col-12 col-sm-2">
                    <span class="fw-semibold">SP</span>
                    <p>{{$bald->ref_externa->acl->sp_fft}}</p>
                </div>
            </div>

            <div class="card border-0 shadow-lg mt-3 p-3">
                <form method="POST" action="{{ url('bald/'. $bald->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row my-3">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="bald_id">Código Nemesis</label>
                                <input
                                    type="text"
                                    class="form-control input-custom @error('bald_id') is-invalid @enderror"
                                    id="bald_id"
                                    name="bald_id"
                                    value="{{$bald->id}}"
                                    aria-label="Código Nemesis">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="estado_nemesis">Estado</label>
                                <select class="form-select" name="estado_nemesis_bald_id" id="estado_nemesis_bald_id"
                                        aria-label="Seleccionar Estado Nemesis">
                                    <option disabled>Escolha um estado</option>
                                    @foreach($estados as $estado)
                                        <option
                                            value="{{ $estado->id }}"
                                            @if($estado->id == $bald->estado_nemesis_bald_id) selected @endif >
                                            {{$estado->descricao}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="data_estado_global_bald">Data Estado</label>
                                <input
                                    type="date"
                                    id="data_estado_global_bald"
                                    name="data_estado_global_bald"
                                    class="form-control input-custom @error('data_estado_global_bald') is-invalid @enderror"
                                    value="{{$bald->data_estado_global_bald}}"
                                    required
                                    aria-describedby="Data de estado">
                            </div>
                        </div>

                    </div>
                    <div class="row my-3">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="data_envio_proj_sp_bald">Data Envio Sp - Projeto </label>
                                <input
                                    type="date"
                                    id="data_envio_proj_sp_bald"
                                    name="data_envio_proj_sp_bald"
                                    class="form-control input-custom @error('data_envio_proj_sp_bald') is-invalid @enderror"
                                    value="{{$bald->data_envio_proj_sp_bald}}"
                                    required
                                    aria-describedby="Data de envio de projeto SP">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="data_real_p_bald">Data Realização Projeto </label>
                                <input
                                    type="date"
                                    id="data_real_p_bald"
                                    name="data_real_p_bald"
                                    class="form-control input-custom
            @error('data_real_p_bald') is-invalid @enderror"
                                    value="{{$bald->data_real_p_bald}}"
                                    required
                                    aria-describedby="Data de Realização de Projeto">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="data_plan_p_bald">Data Planeada Projeto </label>
                                <input
                                    type="date"
                                    id="data_plan_p_bald"
                                    name="data_plan_p_bald"
                                    class="form-control input-custom
            @error('data_plan_p_bald') is-invalid @enderror"
                                    value="{{$bald->data_plan_p_bald}}"
                                    required
                                    aria-describedby="Data de projeto planeada">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="data_real_c_bald">Data Realização Construção </label>
                                <input
                                    type="date"
                                    id="data_real_c_bald"
                                    name="data_real_c_bald"
                                    class="form-control input-custom
            @error('data_real_c_bald') is-invalid @enderror"
                                    value="{{$bald->data_real_c_bald}}"
                                    required
                                    aria-describedby="Data de realização de construção">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="data_plan_c_bald">Data Planeada Construção </label>
                                <input
                                    type="date"
                                    id="data_plan_c_bald"
                                    name="data_plan_c_bald"
                                    class="form-control input-custom
            @error('data_plan_c_bald') is-invalid @enderror"
                                    value="{{$bald->data_plan_c_bald}}"
                                    required
                                    aria-describedby="Data planeada de construção">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="data_real_cadastro_bald">Data Realização Cadastro </label>
                                <input
                                    type="date"
                                    id="data_real_cadastro_bald"
                                    name="data_real_cadastro_bald"
                                    class="form-control input-custom
            @error('data_real_cadastro_bald') is-invalid @enderror"
                                    value="{{$bald->data_real_cadastro_bald}}"
                                    required
                                    aria-describedby="Data de realização de cadastro">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="data_plan_cadastro_bald">Data Planeada Cadastro </label>
                                <input
                                    type="date"
                                    id="data_plan_cadastro_bald"
                                    name="data_plan_cadastro_bald"
                                    class="form-control input-custom
            @error('data_plan_cadastro_bald') is-invalid @enderror"
                                    value="{{$bald->data_plan_cadastro_bald}}"
                                    required
                                    aria-describedby="Data planeada de cadastro">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-12 col-md-2">
                            <a href="{{url()->previous()}}" class="w-100 my-3 btn btn-inverted">Cancelar</a>
                        </div>
                        <div class="col-12 col-md-2">
                            <button type="submit" class="w-100 my-3 btn btn-filled">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
