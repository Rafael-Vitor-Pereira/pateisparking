<?php

namespace App\Livewire\Admin\Vacancy;

use App\Livewire\Forms\Admin\VacancyFormEditObject;
use App\Models\Client;
use Livewire\Component;

class FormVacancyEdit extends Component
{
    public VacancyFormEditObject $form;

    public Vacancy $vaga;

    public function mount(Vacancy $vaga)
    {
        $this->vaga = $vaga;

        $this->form->preencherForm($vaga);
    }

    public function Salvar()
    {
        $this->validate();

        $vacancy = Vacancy::find($this->form->id);

        //Salvar o preco da vaga
        $priceFinal = $this->calculoTempo($vacancy->entry_time, $this->form->exit_time)*$vacancy->parking->price_hours;
        $vacancy->price_total = $priceFinal;
        $vacancy->save();

        //Mudar a ocupação do cliente para 0 (não ocupado)
        $client = Client::find($vacancy->client_id);
        $client->occupation = 0;
        $client->save();

        $this->vaga->update($this->form->all());

        session()->flash('mensagem', "Vaga cadastrada com sucesso");

        $this->redirect('/vagas', navigate: true);
    }

    public function render()
    {
        $this->form->exit_time = date('Y-m-d H:i:s');

        return view('livewire.admin.vacancy.saida', compact('clients', 'parkings'));
    }
}
