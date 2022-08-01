<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;

class EmployeeCreate extends Component
{
    public $name = null;
    public function render()
    {
        return view('livewire.administrador.employee-create');
    }
}
