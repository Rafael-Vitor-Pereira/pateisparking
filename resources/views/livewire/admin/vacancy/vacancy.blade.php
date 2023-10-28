<section>

    <div class="d-flex flex-row bd-highlight justify-content-end mb-2">
        <div>
            <button type="button" class="btn btn-success rounded-pill" onclick="window.location='/vagas/create'">Adicionar</button>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Estacionamento</th>
                <th scope="col">Placa</th>
                <th scope="col">Motorista</th>
                <th scope="col">Horario Entrada</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>

                @forelse ($vacancies as $vacancy)
                <tr>
                    @if ($vacancy->exit_time == null)
                        <tr>
                            <td>{{$vacancy->id}}</td>
                            <td>{{$vacancy->parking->name}}</td>
                            <td>{{$vacancy->client->placa}}</td>
                            <td>{{$vacancy->client->nome}}</td>
                            <td>{{$vacancy->entry_time}}</td>
                            <td>
                                <a class="btn btn-warning" role="button" href="/vagas/{{$vacancy->id}}/editar" wire:navigate>Saida</a>
                            </td>
                        </tr>
                    @endif

                @empty
                <td><p>Sem entrada de clientes</p></td>

                @endforelse
            </tbody>
          </table>
    </div>

</section>
