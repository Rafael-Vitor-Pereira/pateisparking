<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"> --}}

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="nav-link text-white" href="{{route('home')}}">Pagina Inicial</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item text-white"><a class="nav-link text-white" href="{{route('clients.index')}}">Clientes</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{route('vagas.index')}}">Vagas</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="{{route('historico.index')}}">Historico</a></li>
      </ul>
    </div>
  </div>
</nav>
