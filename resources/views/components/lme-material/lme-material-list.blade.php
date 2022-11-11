<div class="row">
    @foreach($materiais as $item)
        <p>{{ $item->preco_venda }}</p>
        <p>{{ $item->preco_metal_kg_cabo }}</p>
        <p>{{ $item->lme_cobre_kg }}</p>
        <p>{{ $item->lme_chumbo_kg }}</p>
    @endforeach
</div>
