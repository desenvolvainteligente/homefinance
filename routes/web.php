<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

// Route::controller(DashboardController::class)->group(function (){
//     Route::get('/dashboard', 'index')->name('dashboard.index');
// });

// Route::controller(PacienteController::class)->group(function() {
//     Route::get('/paciente', 'index')->name('paciente');
//     Route::post('/cadastro-paciente', 'store')->name('paciente.cadastro');
//     Route::get('/cadastrar-paciente', 'create')->name('paciente.cadastrar');
//     Route::get('/avaliar-paciente', 'avaliacao')->name('paciente.avaliacao');
// });

// Route::controller(FinanceiroController::class)->group(function () {
//     Route::get('/financeiro', 'index');
// });