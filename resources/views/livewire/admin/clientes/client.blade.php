<section>
    <h3>Lista de Veiculos</h3>
    <div class="d-flex flex-row justify-content-end mb-2">
        <div>
            <button type="button" class="btn btn-success" onclick="window.location='/clients/create'">Adicionar</button>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Motorista</th>
                <th scope="col">Placa</th>
                <th scope="col">CPF</th>
                <th scope="col">Tipo de veiculo</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($clients as $client)
              <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->nome}}</td>
                <td>{{$client->placa}}</td>
                <td>{{$client->cpf}}</td>
                <td>{{$client->tipoVeiculo}}</td>
                <td>
                    {{-- Editar --}}
                    <a class="btn btn-sm btn-outline-primary" href="/clients/{{$client->id}}/editar" wire:navigate>
                        Editar
                    </a>

                    {{-- Excluir --}}
                    <button class="btn btn-sm btn-outline-danger" wire:click="deletar({{$client->id}})" wire:confirm="Deseja mesmo deletar o cliente?">
                        Apagar
                    </button>
                </td>
              </tr>
              @empty
                <td>Sem veiculos cadastrados</td>
                @endforelse
            </tbody>
          </table>
      </div>
    </div>

</section>
