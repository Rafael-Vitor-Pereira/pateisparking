<div class="mt-5 bg-white col-md-6 text-center teste">
    <h1>{{$caption}}</h1>
    <p class="text-justify">Bem-vindo ao nosso site de vagas de estacionamento! Estamos aqui para facilitar sua busca por estacionamento conveniente e acessível. Explore nossas opções e encontre a vaga perfeita para suas necessidades. Estacione com facilidade e tranquilidade conosco!</p>
    <p><a class="btn btn-primary" role="button" href="{{route('vagas.create')}}">Cadastrar entrada</a></p>
</div>
<style>
.teste{
    display: flex;
    flex-direction: column;
    width: 35%;
    margin: 0 auto;
}
</style>