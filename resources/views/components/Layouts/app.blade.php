<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fast Parking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            .teste{
                display: flex;
                flex-direction: column;
                width: 35%;
                margin: 0 auto;
            }
        </style>
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
                        <li class="nav-item text-white"><a class="nav-link text-white" href="/clients">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/vagas">Vagas</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/historico">Historico</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mt-5 bg-white col-md-6 text-center teste">
            <h1>Bem Vindo</h1>
            <p class="text-justify">Bem-vindo ao nosso site de vagas de estacionamento! Estamos aqui para facilitar sua busca por estacionamento conveniente e acessível. Explore nossas opções e encontre a vaga perfeita para suas necessidades. Estacione com facilidade e tranquilidade conosco!</p>
            <p><a class="btn btn-primary" role="button" href="/vagas/create">Cadastrar entrada</a></p>
        </div>

        {{-- Msg de sucesso as cadastrar ou editar --}}
        <x-mensagem />

        {{-- Conteúdo da página --}}
        <div class="container mb-3" >
            {{$slot}}
        </div>
    </body>
</html>
