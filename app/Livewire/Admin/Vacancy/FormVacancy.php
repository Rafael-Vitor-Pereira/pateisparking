<?php

namespace App\Livewire\Admin\Vacancy;

use App\Livewire\Forms\Admin\VacancyFormObject;
use App\Models\Client;
use App\Models\Parking;
use App\Models\Vacancy;
use Livewire\Component;

class FormVacancy extends Component
{
    public VacancyFormObject $form;

    public Vacancy $vaga;

    public function Salvar()
    {
        $this->validate();

        $client = Client::find($this->form->client_id);
        $client->occupation = 1;
        $client->save();

        Vacancy::create($this->form->all());

        session()->flash('mensagem', "Vaga cadastrado com sucesso");

        $this->redirect('/vagas', navigate: true);
    }

    public function render()
    {
        $this->form->entry_time = date('Y-m-d H:i:s');
        $clients = Client::all();
        $parkings = Parking::all();

        return view('livewire.admin.vacancy.form-vacancy', compact('clients', 'parkings'));
    }
}
