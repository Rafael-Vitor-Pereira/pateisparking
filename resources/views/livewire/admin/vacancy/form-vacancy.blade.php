<section>

    <form wire:submit.prevent="Salvar">

        @csrf

        <div class="row">

            <div class="form-group col-6">
                <label for="my-select" class="fw-bold">Selecione o cliente</label>
                <select id="my-client_id" class="form-control mb-4" wire:model.blur="form.client_id">
                    <option value="">Selecione o cliente</option>
                    @foreach ($clients as $client)
                        @if ($client->occupation == 0)
                            <option value="{{$client->id}}">{{$client->placa}}</option>
                        @endif
                    @endforeach
                </select>
                @error('form.client_id')
                    <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="parking_id" class="fw-bold">Selecione o local do estacionamento</label>
                <select id="parking_id" class="form-control ,b-4" wire:model.blur="form.parking_id">
                    <option value="">Selecione o cliente</option>
                    @foreach ($parkings as $parking)
                        <option value="{{$parking->id}}">{{$parking->name}}</option>
                    @endforeach
                </select>
                @error('form.parking_id')
                <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
            @enderror
            </div>
        </div>
        <div class="form-group col-6">
          <label for="entry_time" class="fw-bold">Horario de entrada</label>
          <input type="text" class="form-control" id="entry_time" wire:model.blur="form.entry_time">
        </div>
        @if ()

        @endif

        <div class="d-flex gap-2 mt-3">
            <a class="btn btn-warning" href="{{url()->previous()}}">Cancelar</a>
            <button type="submit" class="btn btn-success">Adicionar</button>
        </div>
    </form>

</section>
