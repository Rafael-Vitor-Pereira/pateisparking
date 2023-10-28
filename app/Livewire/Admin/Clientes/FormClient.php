<?php

namespace App\Livewire\Admin\Clientes;

use App\Livewire\Forms\Admin\ClientFormObject;
use App\Models\Client;
use Livewire\Component;

class FormClient extends Component
{
    public ClientFormObject $form;

    public Client $cliente;

    public function mount(Client $cliente)
    {
        $this->cliente = $cliente;

        $this->form->preencherForm($cliente);
    }

    public function Salvar()
    {
        $this->validate();

        if(isset($this->cliente->id)){
            $this->cliente->update($this->form->all());
        }else{
            Client::create($this->form->all());
        }

        session()->flash('mensagem', "Cliente cadastrado com sucesso");

        $this->redirect('/clients', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.clientes.form-client');
    }
}
