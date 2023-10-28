<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ClientFormObject extends Form
{
    #[Rule('required|string|size:8')]
    public $placa;

    #[Rule('required|string')]
    public $nome;

    #[Rule('required|string|size:14')]
    public $cpf;

    #[Rule('required')]
    public $tipoVeiculo;

    public function preencherForm($cliente){
        $this->placa = $cliente->placa;

        $this->nome = $cliente->nome;

        $this->cpf = $cliente->cpf;

        $this->tipoVeiculo = $cliente->tipoVeiculo;
    }
}
