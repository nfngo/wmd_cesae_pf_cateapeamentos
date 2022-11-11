<div class="w-100 min-vh-100 p-4 mt-5">
    <div class="row">
        <div class="col-12">
            <p class="my-4 text-uppercase fs-5">Editar Apeamento</p>
            <div class="row mt-5 px-3 text-color-light-blue">
                <div class="col-12 col-sm-3 d-flex flex-column">
                    <span class="fw-semibold">Ref. Externa</span>
                    <p>{{$apea->ref_externa->id}}</p>
                </div>
                <div class="col-12 col-sm-3">
                    <span class="fw-semibold">Central</span>
                    <p>{{$apea->ref_externa->acl_id}}</p>
                </div>
                <div class="col-12 col-sm-2">
                    <span class="fw-semibold">IAN IAS</span>
                    <p>{{$apea->ref_externa->acl->ian_ias}}</p>
                </div>
                <div class="col-12 col-sm-2">
                    <span class="fw-semibold">OCR</span>
                    <p>{{$apea->ref_externa->acl->ifr}}</p>
                </div>
                <div class="col-12 col-sm-2">
                    <span class="fw-semibold">SP</span>
                    <p>{{$apea->ref_externa->acl->sp_fft}}</p>
                </div>
            </div>

            <div class="card border-0 shadow-lg mt-3 p-3">
                <form method="POST" action="{{ url('apea/'. $apea->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row my-3">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="apea_id">Código Nemesis</label>
                                <input
                                    type="text"
                                    class="form-control input-custom @error('apea_id') is-invalid @enderror"
                                    id="apea_id"
                                    name="apea_id"
                                    value="{{$apea->id}}"
                                    aria-label="Código Nemesis">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="estado_nemesis">Estado</label>
                                <select class="form-select" name="estado_nemesis_apea_id" id="estado_nemesis_apea_id"
                                        aria-label="Seleccionar Estado Nemesis">
                                    <option disabled>Escolha um estado</option>
                                    @foreach($estados as $estado)
                                        <option
                                            value="{{ $estado->id }}"
                                            @if($estado->id == $apea->estado_nemesis_apea_id) selected @endif
                                        >
                                            {{$estado->descricao}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="data_estado_global_apea">Data Estado</label>
                                <input
                                    type="date"
                                    id="data_estado_global_apea"
                                    name="data_estado_global_apea"
                                    class="form-control input-custom
                                    @error('data_estado_global_apea') is-invalid @enderror"
                                    value="{{$apea->data_estado_global_apea}}"
                                    required
                                    aria-label="Data de estado">
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="data_envio_proj_sp_apea">Data Envio Sp - Projeto </label>
                                <input
                                    type="date"
                                    id="data_envio_proj_sp_apea"
                                    name="data_envio_proj_sp_apea"
                                    class="form-control input-custom
                                    @error('data_envio_proj_sp_apea') is-invalid @enderror"
                                    value="{{$apea->data_envio_proj_sp_apea}}"
                                    required
                                    aria-label="Data de envio de projeto SP">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="data_real_p_apea">Data Realização - Projeto </label>
                                <input
                                    type="date"
                                    id="data_real_p_apea"
                                    name="data_real_p_apea"
                                    class="form-control input-custom
                                    @error('data_real_p_apea') is-invalid @enderror"
                                    value="{{$apea->data_real_p_apea}}"
                                    required
                                    aria-label="Data de Realização de Projeto">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="data_plan_p_apea">Data Planeada - Projeto </label>
                                <input
                                    type="date"
                                    id="data_plan_p_apea"
                                    name="data_plan_p_apea"
                                    class="form-control input-custom
                                    @error('data_plan_p_apea') is-invalid @enderror"
                                    value="{{$apea->data_plan_p_apea}}"
                                    required
                                    aria-label="Data de projeto planeada">
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="data_real_c_apea">Data Realização - Construção </label>
                                <input
                                    type="date"
                                    id="data_real_c_apea"
                                    name="data_real_c_apea"
                                    class="form-control input-custom
                                    @error('data_real_c_apea') is-invalid @enderror"
                                    value="{{$apea->data_real_c_apea}}"
                                    required
                                    aria-label="Data de realização de construção">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="data_plan_c_apea">Data Planeada - Construção </label>
                                <input
                                    type="date"
                                    id="data_plan_c_apea"
                                    name="data_plan_c_apea"
                                    class="form-control input-custom
                                    @error('data_plan_c_apea') is-invalid @enderror"
                                    value="{{$apea->data_plan_c_apea}}"
                                    required
                                    aria-label="Data planeada de construção">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="data_real_cadastro_apea">Data Realização - Cadastro </label>
                                <input
                                    type="date"
                                    id="data_real_cadastro_apea"
                                    name="data_real_cadastro_apea"
                                    class="form-control input-custom
                                    @error('data_real_cadastro_apea') is-invalid @enderror"
                                    value="{{$apea->data_real_cadastro_apea}}"
                                    required
                                    aria-label="Data de realização de cadastro">
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="data_plan_cadastro_apea">Data Planeada - Cadastro </label>
                                <input
                                    type="date"
                                    id="data_plan_cadastro_apea"
                                    name="data_plan_cadastro_apea"
                                    class="form-control input-custom
                                    @error('data_plan_cadastro_apea') is-invalid @enderror"
                                    value="{{$apea->data_plan_cadastro_apea}}"
                                    required
                                    aria-label="Data planeada de cadastro">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="tipo_cabos">Tipo de Cabos (PRIM/SEC)</label>
                                <select class="form-select" aria-label="tipo_cabos">
                                    <option value="" selected>Seleccione um tipo de cabos</option>
                                    @foreach(['PRIM', 'PRIM + SEC'] as $tipo)
                                        <option value="{{$tipo}}">{{$tipo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="mb-1" for="peso_cabos">Peso Cabo Apeamento (Kg)</label>
                                <input
                                    type="text"
                                    class="form-control input-custom @error('peso_cabos') is-invalid @enderror"
                                    id="peso_cabos"
                                    name="peso_cabos"
                                    value="{{$apea->peso_cabos}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="form-group">
                                <label class="mb-1" for="faturado">Faturado</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="faturado" type="radio" id="faturadoT"
                                           value="1" {{ $apea->faturado == "1" ? 'checked' : '' }}>
                                    <label class="form-check-label" for="faturadoT">Sim</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="faturado" type="radio" id="faturadoF"
                                           value="0"{{ $apea->faturado == "0" ? 'checked' : '' }}>
                                    <label class="form-check-label" for="faturadoF">Não</label>
                                </div>
                            </div>
                        </div>
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
