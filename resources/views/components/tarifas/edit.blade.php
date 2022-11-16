<div class="card shadow-lg p-3 border-0">
    <div class="row">
        <div class="col-4 col-md-12 col-lg-4 d-flex justify-content-center align-items-center">
            <img class="card-icon" src="{{url('/images/money.png')}}" alt="Money">
        </div>
        <div class="col-8 col-md-12 col-lg-8 tarifas-card-content">
            <div class="row overflow-hidden">
                <div class="col-12">
                    <form id="tarifasForm" class="card-form" action="{{url('tarifas/'.$tarifa->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @isadmin
                        <p class="text-color-secondary-header m-0 fs-4 fw-semibold">Editar Tarifas</p>
                        <div class="form-group mb-2">
                            <label class="fw-semibold mb-1" for="custo_retirada">Custo de retirada</label>
                            <input type="number"
                                   id="custo_retirada"
                                   name="custo_retirada"
                                   value="{{$tarifa->custo_retirada}}"
                                   placeholder="Insira a custo de retirada"
                                   class="form-control input-custom"
                                   min="0"
                                   step="0.01"
                                   required>
                        </div>
                        <div class="form-group">
                            <label  class="fw-semibold mb-1" for="custo_operacao">Custo de operacao</label>
                            <input type="number"
                                   id="custo_operacao"
                                   name="custo_operacao"
                                   value="{{$tarifa->custo_operacao}}"
                                   autocomplete="custo_operacao"
                                   placeholder="Insira o custo de operacao"
                                   class="form-control input-custom"
                                   min="0"
                                   step="0.01"
                                   required>
                        </div>
                        @endisadmin
                        <div @isadmin class="col-12 d-flex justify-content-end" @else class="d-none" @endisadmin>
                            <button id="tarifasCancelBtn" type="button" class="mt-3 mx-3 btn btn-sm btn-inverted">Cancelar</button>
                            <button type="submit" class="mt-3 btn btn-sm btn-filled">Gravar</button>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <div id="tarifasStatic" @isadmin class="card-static" @endisadmin >
                        <p class="text-color-secondary-header m-0 fs-4 fw-semibold">Tarifas</p>
                        <div class="d-flex flex-column mb-1">
                            <span class="fw-semibold">Custo de retirada</span>
                            <span class="fs-3 text-color-light-blue">{{ number_format($tarifa->custo_retirada, 2, ',', ' ') }}€</span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="fw-semibold">Custo de operação</span>
                            <span class="fs-3 text-color-light-blue">{{number_format($tarifa->custo_operacao, 2, ',', ' ')}}€</span>
                        </div>
                        <div @isadmin class="col-12 d-flex justify-content-end" @else class="d-none" @endisadmin>
                            <button type="button" id="tarifasBtn" class="btn btn-sm btn-inverted" @isadmin @else disabled @endisadmin>Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
