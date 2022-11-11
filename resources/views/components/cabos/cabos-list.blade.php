<div class="w-100 p-3 mt-5">
    <div class="row">
        <div class="col-12">
            <h1>Cabos</h1>
            <div class="mb-3" style="overflow-x: scroll">
                @if($cabo->count() == 0)
                    <p>Não existem dados</p>
                @else
                    <table class="table table-striped table-bordered" style="font-size: 0.75rem">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Material</th>
                            <th scope="col">perc_mix_cabo</th>
                            <th scope="col">perc_lme_cobre</th>
                            <th scope="col">perc_lme_chumbo</th>
                            <th scope="col">perc_peso_cobre</th>
                            <th scope="col">perc_peso_chumbo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cabo as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->material }}</td>
                                <td>{{ $item->perc_mix_cabo }}</td>
                                <td>{{ $item->perc_lme_cobre }}</td>
                                <td>{{ $item->perc_lme_chumbo}}</td>
                                <td>{{ $item->perc_peso_cobre }}</td>
                                <td>{{ $item->perc_peso_chumbo }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            {{$cabo->links()}}
        </div>
    </div>
</div>
