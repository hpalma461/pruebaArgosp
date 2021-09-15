<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Idioma;

class Idiomas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $idioma;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.catalogos.idiomas.view', [
            'idiomas' => Idioma::latest()
						->orWhere('idioma', 'LIKE', $keyWord)
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
		$this->idioma = null;
    }

    public function store()
    {
        $this->validate([
		'idioma' => 'required|unique:idiomas',
        ]);

        Idioma::create([ 
			'idioma' => $this-> idioma
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Idioma creado con exitó.');
    }

    public function edit($id)
    {
        $record = Idioma::findOrFail($id);

        $this->selected_id = $id; 
		$this->idioma = $record-> idioma;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'idioma' => 'required|unique:idiomas',
        ]);

        if ($this->selected_id) {
			$record = Idioma::find($this->selected_id);
            $record->update([ 
			'idioma' => $this-> idioma
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Idioma actualizado con éxito.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Idioma::where('id', $id);
            $record->delete();
            
			session()->flash('message', 'Idioma eliminado con éxito.');
        }
    }
}
