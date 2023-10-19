@extends('Admin/Layouts/principal')

@section('main-menu')

<section>

    <form action="{{$action}}" method="POST">

        @csrf

        <div class="row">

            <div class="form-group col-6">
                <label for="my-select" class="fw-bold">Selecione o cliente</label>
                <select id="my-client_id" class="form-control mb-4" name="client_id">
                    <option value="" disabled selected>Selecione o cliente</option>
                    @foreach ($clients as $client)
                        @if ($client->occupation == 0)
                            <option value="{{$client->id}}">{{$client->board}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group col-6">
                <label for="parking_id" class="fw-bold">Selecione o local do estacionamento</label>
                <select id="parking_id" class="form-control ,b-4" name="parking_id">
                    <option value="" disabled selected>Selecione o cliente</option>
                    @foreach ($parkings as $parking)
                        <option value="{{$parking->id}}">{{$parking->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group col-6">
          <label for="entry_time" class="fw-bold">Hora de entrada
          </label>
          <input type="text" class="form-control" name="entry_time" id="entry_time" value="{{$hoursTime}}" placeholder="Tempo">
        </div>

        <div class="d-flex gap-2 mt-3">
            <a class="btn btn-warning" href="{{url()->previous()}}">Cancelar</a>
            <button type="submit" class="btn btn-success">Adicionar</button>
        </div>
    </form>

</section>

@endsection
