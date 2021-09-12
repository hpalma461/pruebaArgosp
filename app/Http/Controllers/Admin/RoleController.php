<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //recuperar todos los permisos para despues mandarselos a la vista
        $permissions = Permission::all(); 

        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //indicar que el campo name debe de ser un campo requerido, para no mandar campo vacio
        $request->validate([
            'name' => 'required'
        ]);

        //Para crear un nuevo rol
        $role = Role::create($request->all());

        //con esta linea asignamos varios permisos al rol que se acaba de crear
        $role->permissions()->sync($request->permissions);

        //luego pedimos que nos redireccione a la ruta con nombre admin.roles.edit
        //luego le pasamos el parametro que acabamos de crear y mandarle un mensaje
        return redirect()->route('admin.roles.edit', $role)->with('info', 'El rol se creó con exitó');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //recuperar todos los permisos para despues mandarselos a la vista
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
         //indicar que el campo name debe de ser un campo requerido, para no mandar campo vacio
         $request->validate([
            'name' => 'required'
        ]);

        $role->update($request->all());

        //con esta linea asignamos varios permisos al rol que se acaba de crear
        $role->permissions()->sync($request->permissions);

        //luego pedimos que nos redireccione a la ruta con nombre admin.roles.edit
        //luego le pasamos el parametro que acabamos de crear y mandarle un mensaje
        return redirect()->route('admin.roles.edit', $role)->with('info', 'El rol se actualió con exitó');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('admin.roles.index')->with('info', 'El rol se eliminó con exitó');
    }
}
