@extends('Admin/Layouts/principal')

@section('main-menu')

<section>

    <div class="d-flex flex-row justify-content-end mb-2">
        <div>
            <button type="button" class="btn btn-success" onclick="window.location='{{route('clients.create')}}'">Adicionar</button>
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
                <td>{{$client->name}}</td>
                <td>{{$client->board}}</td>
                <td>{{$client->cpf}}</td>
                <td>{{$client->type_vehicle}}</td>
                <td>
                    {{-- Editar --}}
                    <a class="btn btn-sm btn-outline-primary" href="{{route('clients.edit',$client->id)}}">
                        Editar
                    </a>

                    {{-- Excluir --}}
                    <form style="display: inline;" method="POST" action="{{route('clients.destroy', $client->id)}}">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            Apagar
                        </button>
                    </form>
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

@endsection
