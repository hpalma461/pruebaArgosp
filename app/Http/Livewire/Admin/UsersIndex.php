<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

//importar la clase para que podamos usar la paginacion en livewire
use Livewire\WithPagination;

class UsersIndex extends Component
{
    //declararlo para decir que aqui usaremos la paginacion
    use withPagination;

    //declarar un propiedad para que se sincronice con el campo input del componente livewire y realice la busqueda
    public $search;

    //indicarle a livewire que se usaran los estilos de bootstrap en lugar de los de tailwind   
    protected $paginationTheme = "bootstrap";

    
    //metodo para que se resetee la pagina cuando busco en el input y pueda consultar en todas las paginas
    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        //recupera todos los usuarios y con paginacion
        $users = User::Where('name', 'LIKE' , '%' . $this->search . '%')
                        ->orWhere('email', 'LIKE' , '%' . $this->search . '%')
                        ->paginate(5);
        
        return view('livewire.admin.users-index', compact('users'));
    }
}
