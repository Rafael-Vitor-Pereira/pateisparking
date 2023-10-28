<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Rule;
use Livewire\Form;

class VacancyFormEditObject extends Form
{
    #[Rule('required')]
    public $client_id;

    #[Rule('required')]
    public $parking_id;

    #[Rule('required')]
    public $entry_time;

    #[Rule('required')]
    public $exit_time;

    public $price_total;

    public $id;

    public function preencherForm($vaga){
        $this->client_id = $vaga->client_id;

        $this->parking_id = $vaga->parking_id;

        $this->entry_time = $vaga->entry_time;

        $this->id = $vaga->id;
    }
}
