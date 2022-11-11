<h1>Edit</h1>
<form action="{{url('cabo/'.$cabo->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <!-- Select -->
        <label for="material">material</label>
        <input type="text"
        id="material"
        name="material"
        value="{{$cabo->material}}"
        placeholder="Insira a material"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="perc_mix_cabo">perc_mix_cabo</label>
        <input type="number"
        id="perc_mix_cabo"
        name="perc_mix_cabo"
        value="{{$cabo->perc_mix_cabo}}"
        autocomplete="perc_mix_cabo"
        placeholder="Insira o perc_mix_cabo"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="perc_lme_cobre">perc_lme_cobre</label>
        <input type="number"
        id="perc_lme_cobre"
        name="perc_lme_cobre"
        value="{{$cabo->perc_lme_cobre}}"
        autocomplete="perc_lme_cobre"
        placeholder="Insira o perc_lme_cobre"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="perc_lme_chumbo">perc_lme_chumbo</label>
        <input type="number"
        id="perc_lme_chumbo"
        name="perc_lme_chumbo"
        value="{{$cabo->perc_lme_chumbo}}"
        autocomplete="perc_lme_chumbo"
        placeholder="Insira o perc_lme_chumbo"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="perc_lme_chumbo">perc_lme_chumbo</label>
        <input type="number"
        id="perc_lme_chumbo"
        name="perc_lme_chumbo"
        value="{{$cabo->perc_lme_chumbo}}"
        autocomplete="perc_lme_chumbo"
        placeholder="Insira o perc_lme_chumbo"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="perc_peso_cobre">perc_peso_cobre</label>
        <input type="number"
        id="perc_peso_cobre"
        name="perc_peso_cobre"
        value="{{$cabo->perc_peso_cobre}}"
        autocomplete="perc_peso_cobre"
        placeholder="Insira o perc_peso_cobre"
        class="form-control"
        required>
    </div>
    <div class="form-group">
        <label for="perc_peso_chumbo">perc_peso_chumbo</label>
        <input type="number"
        id="perc_peso_chumbo"
        name="perc_peso_chumbo"
        value="{{$cabo->perc_peso_chumbo}}"
        autocomplete="perc_peso_chumbo"
        placeholder="Insira o perc_peso_chumbo"
        class="form-control"
        required>
    </div>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>