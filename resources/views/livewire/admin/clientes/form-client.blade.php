<section>
    <h3>Cadastro de clientes</h3>

    <form wire:submit.prevent="Salvar">

        @csrf

        @isset($client)
            @method('PUT')
        @endisset

        <div class="row">

            <div class="form-group col-6">
                <label for="board">Placa</label>
                <input type="text" class="form-control" id="placa" placeholder="Placa" value="" wire:model.blur="form.placa">
                @error('form.placa')
                    <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" placeholder="Nome" value="" wire:model.blur="form.nome">

                @error('form.nome')
                    <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-4">
                <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="CPF" value="" wire:model.blur="form.cpf">

            @error('form.cpf')
                <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
            @enderror
            </div>

            <div class="form-group col-4">
                <label for="type_vehicle">Tipo de veiculo</label>
                <select class="form-control" id="inputGroupSelect01" value="" wire:model.blur="form.tipoVeiculo">
                    <option value="">Selecione o tipo de veiculo</option>
                    <option value="Moto">Moto</option>
                    <option value="Carro">Carro</option>
                </select>

            @error('form.tipoVeiculo')
                <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
            @enderror
            </div>

            <div class="form-group col-2 text-right">
                <button type="reset" class="btn btn-warning rounded-pill">
                    <a class="text-decoration-none text-white" href="/clients">Cancelar</a></button>
            </div>

            <div class="form-group col-2 text-right">
                <x-botaoSalvar />
            </div>

        </div>
    </form>

</section>
