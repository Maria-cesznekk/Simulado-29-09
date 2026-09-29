<?php

use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos', ProdutoIndex::class)->name('produtos/index');
