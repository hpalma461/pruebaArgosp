<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cat2adscripcione;

class Cat2adscripciones extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $adscripcion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.cat2adscripciones.view', [
            'cat2adscripciones' => Cat2adscripcione::latest()
						->orWhere('adscripcion', 'LIKE', $keyWord)
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
		$this->adscripcion = null;
    }

    public function store()
    {
        $this->validate([
		'adscripcion' => 'required',
        ]);

        Cat2adscripcione::create([ 
			'adscripcion' => $this-> adscripcion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Adscripción creada con éxito.');
    }

    public function edit($id)
    {
        $record = Cat2adscripcione::findOrFail($id);

        $this->selected_id = $id; 
		$this->adscripcion = $record-> adscripcion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'adscripcion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Cat2adscripcione::find($this->selected_id);
            $record->update([ 
			'adscripcion' => $this-> adscripcion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Adscripción actualizada con éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Cat2adscripcione::where('id', $id);
            $record->delete();
        }
    }
}
