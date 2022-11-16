<div class="card shadow-lg p-3 border-0">
    <div class="row cabo-card-content">
        <div id="caboStatic_{{$cabo->id}}" class="card-static row m-0 p-0">
            <p class="text-color-secondary-header m-0 fs-4 fw-semibold">{{ucfirst($cabo->material)}}</p>
            <div class="col-6 d-flex flex-column justify-content-between my-2" style="min-width: 150px;">
                <span class="fw-semibold">% no Mix de cabo</span>
                <span class="fs-3 text-color-light-blue">{{ number_format($cabo->perc_mix_cabo, 2, ',', ' ') }}%</span>
            </div>
            <div class="col-6 d-flex flex-column justify-content-between my-2" style="min-width: 150px;">
                <span class="fw-semibold">% LME Cobre</span>
                <span class="fs-3 text-color-light-blue">{{ number_format($cabo->perc_lme_cobre, 2, ',', ' ') }}%</span>
            </div>
            <div class="col-6 d-flex flex-column justify-content-between my-2" style="min-width: 150px;">
                <span class="fw-semibold">% LME Chumbo</span>
                <span class="fs-3 text-color-light-blue">{{number_format($cabo->perc_lme_chumbo, 2, ',', ' ') }}%</span>
            </div>
            <div class="col-6 d-flex flex-column justify-content-between my-2" style="min-width: 150px;">
                <span class="fw-semibold">% Peso Cabo em cobre</span>
                <span class="fs-3 text-color-light-blue">{{number_format($cabo->perc_peso_cobre, 2, ',', ' ') }}%</span>
            </div>
            <div class="col-6 d-flex flex-column justify-content-between my-2" style="min-width: 150px;">
                <span class="fw-semibold">% Peso Cabo em chumbo</span>
                <span class="fs-3 text-color-light-blue">{{ number_format($cabo->perc_lme_cobre, 2, ',', ' ') }}%</span>
            </div>

            <div @isadmin class="col-12 d-flex justify-content-end" @else class="d-none" @endisadmin>
                <button id="caboEditBtn_{{$cabo->id}}" class="btn btn-sm btn-inverted" @isadmin @else disabled
                        @endisadmin>Editar
                </button>
            </div>

        </div>
        @isadmin
        <form id="caboForm_{{$cabo->id}}" class="card-form" action="{{url('cabos/'.$cabo->id)}}" method="POST">
            @csrf
            @method('PUT')
            <p class="text-color-secondary-header m-0 fs-4 fw-semibold">Editar {{ucfirst($cabo->material)}}</p>
            <div class="row">
                <div class="form-group mb-2 col-6 col-md-12 col-xl-6">
                    <label class="fw-semibold" for="perc_mix_cabo">% no Mix de cabo</label>
                    <input type="number"
                           id="perc_mix_cabo"
                           name="perc_mix_cabo"
                           value="{{$cabo->perc_mix_cabo}}"
                           autocomplete="perc_mix_cabo"
                           placeholder="Ex. 12,34"
                           class="form-control input-custom"
                           min="0"
                           step="0.1"
                           required>
                </div>
                <div class="form-group mb-2 col-6 col-md-12 col-xl-6">
                    <label class="fw-semibold" for="perc_lme_cobre">% LME Cobre</label>
                    <input type="number"
                           id="perc_lme_cobre"
                           name="perc_lme_cobre"
                           value="{{$cabo->perc_lme_cobre}}"
                           autocomplete="perc_lme_cobre"
                           placeholder="Ex. 12,34"
                           class="form-control input-custom"
                           min="0"
                           step="0.1"
                           required>
                </div>
            </div>

            <div class="row">
                <div class="form-group mb-2 col-6 col-md-12 col-xl-6">
                    <label class="fw-semibold" for="perc_lme_chumbo">% LME Chumbo</label>
                    <input type="number"
                           id="perc_lme_chumbo"
                           name="perc_lme_chumbo"
                           value="{{$cabo->perc_lme_chumbo}}"
                           autocomplete="perc_lme_chumbo"
                           placeholder="Ex. 12,34"
                           class="form-control input-custom"
                           min="0"
                           step="0.1"
                           required>
                </div>
                <div class="form-group mb-2 col-6 col-md-12 col-xl-6">
                    <label class="fw-semibold" for="perc_peso_cobre">% Peso Cabo em Cobre</label>
                    <input type="number"
                           id="perc_peso_cobre"
                           name="perc_peso_cobre"
                           value="{{$cabo->perc_peso_cobre}}"
                           autocomplete="perc_peso_cobre"
                           placeholder="Ex. 12,34"
                           class="form-control input-custom"
                           min="0"
                           step="0.1"
                           required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6 col-md-12 col-xl-6">
                    <label class="fw-semibold" for="perc_peso_chumbo">% Peso Cabo em Chumbo</label>
                    <input type="number"
                           id="perc_peso_chumbo"
                           name="perc_peso_chumbo"
                           value="{{$cabo->perc_peso_chumbo}}"
                           autocomplete="perc_peso_chumbo"
                           placeholder="Ex. 12,34"
                           class="form-control input-custom"
                           min="0"
                           step="0.1"
                           required>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-end">
                <button id="caboCancelBtn_{{$cabo->id}}" type="button" class="mt-3 mx-3 btn btn-sm btn-inverted">
                    Cancelar
                </button>
                <button type="submit" class="mt-3 btn btn-sm btn-filled">Gravar</button>
            </div>
        </form>
        @endisadmin
    </div>

</div>

