<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bloque;

class Bloques extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $bloque;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.bloques.view', [
            'bloques' => Bloque::latest()
						->orWhere('bloque', 'LIKE', $keyWord)
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
		$this->bloque = null;
    }

    public function store()
    {
        $this->validate([
		'bloque' => 'required|unique:bloques',
        ]);

        Bloque::create([ 
			'bloque' => $this-> bloque
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Bloque creado con exitó.');
    }

    public function edit($id)
    {
        $record = Bloque::findOrFail($id);

        $this->selected_id = $id; 
		$this->bloque = $record-> bloque;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'bloque' => 'required|unique:bloques',
        ]);

        if ($this->selected_id) {
			$record = Bloque::find($this->selected_id);
            $record->update([ 
			'bloque' => $this-> bloque
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Bloque actualizado con exitó.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Bloque::where('id', $id);
            $record->delete();
        }
    }
}
