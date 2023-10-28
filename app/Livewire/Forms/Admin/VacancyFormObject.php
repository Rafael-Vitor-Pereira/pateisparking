<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Rule;
use Livewire\Form;

class VacancyFormObject extends Form
{
    #[Rule('required')]
    public $client_id;

    #[Rule('required')]
    public $parking_id;

    #[Rule('required')]
    public $entry_time;
}
