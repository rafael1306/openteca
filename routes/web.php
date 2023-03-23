<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/login', [UsuarioController::class, 'loginView']);

Route::get('/', [UsuarioController::class, 'homeView']);

Route::get('/pesquisa', [UsuarioController::class, 'pesquisaView']);

Route::get('/info', [UsuarioController::class, 'infoView']);

Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);




Route::get('/meus_livros', function () {
    return view('meus_livros/meus_livros');
});


