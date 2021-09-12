<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    //generar el metodo llamado index
    public function index(){

        $countRoles = Role::all()->count();
        $countUsers = User::all()->count();
        return view('admin.index', compact('countRoles', 'countUsers'));

    }
}
