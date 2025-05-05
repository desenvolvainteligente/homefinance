<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Livewire\
{
    Dashboard as LivewireDashboard
};

Route::get('dashboard', LivewireDashboard::class);

Route::get('/', function () {
    return view('index');
});
