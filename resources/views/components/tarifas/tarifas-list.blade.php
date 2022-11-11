<div class="w-100 p-3 mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Tarifas</h1>
            <div class="mb-3" style="overflow-x: scroll">
                @if($tarifa->count() == 0)
                    <p>Não existem dados</p>
                @else
                    <table class="table table-striped table-bordered" style="font-size: 0.75rem">
                        <thead>
                        <tr>
                            <th scope="col">custo_retirada</th>
                            <th scope="col">custo_operação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tarifa as $item)
                            <tr>
                                <td>{{ $item->custo_retirada }}</td>
                                <td>{{ $item->custo_operacao }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            {{$tarifa->links()}}
        </div>
    </div>
</div>
