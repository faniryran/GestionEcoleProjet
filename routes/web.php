<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EleveController;


Route::get('/', function(){
    return view('welcome' , [
        'name' => 'Bynan',
        'prenom' => 'Niaina',
    ]);
});

Route::resources([
    'professeurs' => ProfesseurController::class,
]);

Route::resources([
    'classes' => ClasseController::class,
]);

Route::resources([
    'eleves' => EleveController::class,
]);

Route::get('editer_classe/{id}/edit', [ClasseController::class, 'manova'])->name('bynan');



