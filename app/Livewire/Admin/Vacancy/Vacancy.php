<?php

namespace App\Livewire\Admin\Vacancy;

use App\Models\Vacancy as ModelsVacancy;
use Livewire\Component;

class Vacancy extends Component
{
    public $vacancies;

    public $pesquisa;

    public function filtro(){
        if(empty($this->pesquisa)){
            $this->vacancies = ModelsVacancy::all();
        }else{
            $this->vacancies = ModelsVacancy::where("parking", "like", "%$this->pesquisa%")
                                ->orwhere("client", "like", "%$this->pesquisa%")
                                ->orwhere("entry_time", "like", "%$this->pesquisa%")
                                ->get();
        }
    }

    public function deletar($id)
    {
        ModelsVacancy::destroy($id);

        $this->dispatch('ExibirToast', 'Vaga excluída com sucesso');
    }

    public function render()
    {
        $this->filtro();

        return view('livewire.admin.vacancy.vacancy');
    }
}
