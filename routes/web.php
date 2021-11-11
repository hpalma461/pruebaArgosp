<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Livewire\Idiomas;

Route::get('/', [PostController::class,'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class,'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class,'category'])->name('posts.category');

Route::get('tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Route::view('cat1adscripciones', 'livewire.cat1adscripciones.index')->middleware('can:admin.home')->name('cat1adscripciones.index');

Route::view('cat2adscripciones', 'livewire.cat2adscripciones.index')->middleware('can:admin.home')->name('cat2adscripciones.index');

Route::view('grados', 'livewire.grados.index')->middleware('can:admin.home')->name('grados.index');

Route::view('bloques', 'livewire.bloques.index')->middleware('can:admin.home')->name('bloques.index');

Route::view('catalogos.idiomas', 'livewire.catalogos.idiomas.index')->middleware('can:admin.home')->name('idiomas.index');

//Route::resource('catalogos.idiomas', Idiomas::class)->names('catalogos.idiomas');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('relacionPersonal', function () {
    return view('relacionPersonal');
});
