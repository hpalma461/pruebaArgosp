<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Grado;

class Grados extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $grado;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.grados.view', [
            'grados' => Grado::latest()
						->orWhere('grado', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->grado = null;
    }

    public function store()
    {
        $this->validate([
		'grado' => 'required|unique:grados',
        ]);

        Grado::create([ 
			'grado' => $this-> grado
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Grado creado con éxito.');
    }

    public function edit($id)
    {
        $record = Grado::findOrFail($id);

        $this->selected_id = $id; 
		$this->grado = $record-> grado;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'grado' => 'required|unique:grados',
        ]);

        if ($this->selected_id) {
			$record = Grado::find($this->selected_id);
            $record->update([ 
			'grado' => $this-> grado
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Grado actualizado con éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Grado::where('id', $id);
            $record->delete();
        }
    }
}
