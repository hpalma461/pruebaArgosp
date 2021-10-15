<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Livewire\Cat1adscripciones;

//para proteger la ruta segun el rol que tengamos se realiza con el middleware llamado can
Route::get('', [homeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

//Route::view('cat1adscripciones', 'livewire.cat1adscripciones.index')->middleware('can:admin.home');

//crear un grupo de rutas de tipo resource para el crud de usuarios, se le pasa el metodo only para que solo cree la ruta
//index, edit y update
//para proteger las rutas creadas con Route::resource se tiene que hacer en el controlador
Route::resource('users', Usercontroller::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('roles', RoleController::class)->middleware('can:admin.home')->names('admin.roles');

//generar la ruto resource para el crud de categorias
//se le agrega el metodo except para indicarle que ruta no quiero que me genere
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

//se le agrega el metodo except para indicarle que ruta no quiero que me genere
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

//Generar un grupo de rutas con route resource
//se le agrega el metodo except para indicarle que ruta no quiero que me genere
Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

