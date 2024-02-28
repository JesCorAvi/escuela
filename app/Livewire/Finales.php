<?php
namespace App\Livewire;

use App\Models\Asignatura;
use Livewire\Component;


class Finales extends Component
{
    public $notas;
    public $asignaturas;
    public $alumnos;
    public $asignaturaF = 1;
    public $notasF;


    public function notaActual()
    {
        if($this->asignaturaF){
            $this->notasF = Asignatura::find($this->asignaturaF)->notas;
        }

    }

    public function render()
    {
        return view('livewire.finales');
    }
}
