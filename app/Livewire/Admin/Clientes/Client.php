<?php

namespace App\Livewire\Admin\Clientes;

use App\Models\Client as ModelsClient;
use Livewire\Component;

class Client extends Component
{
    public $clients;

    public $pesquisa;

    public function filtro(){
        if(empty($this->pesquisa)){
            $this->clients = ModelsClient::all();
        }else{
            $this->clients = ModelsClient::where("nome", "like", "%$this->pesquisa%")
                                ->orwhere("placa", "like", "%$this->pesquisa%")
                                ->orwhere("cpf", "like", "%$this->pesquisa%")
                                ->orwhere("tipoVeiculo", "like", "%$this->pesquisa%")
                                ->get();
        }
    }

    public function deletar($id)
    {
        ModelsClient::destroy($id);

        $this->dispatch('ExibirToast', 'Cliente excluído com sucesso');
    }

    public function render()
    {
        $this->filtro();

        return view('livewire.admin.clientes.client');
    }
}
