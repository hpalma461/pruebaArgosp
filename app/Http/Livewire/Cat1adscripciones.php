<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cat1adscripcione;

class Cat1adscripciones extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $adscripcion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.cat1adscripciones.view', [
            'cat1adscripciones' => Cat1adscripcione::latest()
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

        Cat1adscripcione::create([ 
			'adscripcion' => $this-> adscripcion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Adscripción creada con éxito.');
    }

    public function edit($id)
    {
        $record = Cat1adscripcione::findOrFail($id);

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
			$record = Cat1adscripcione::find($this->selected_id);
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
            $record = Cat1adscripcione::where('id', $id);
            $record->delete();
        }
    }
}
