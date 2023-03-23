<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function homeView()
    {
        return view('home');
    }

    public function pesquisaView()
    {
        return view('pesquisa');
    }

    public function infoView()
    {
        return view('info');
    }

    public function cadastroViw()
    {
        return view('cadastro');
    }

    public function livrosView()
    {
        return view('meus_livros');
    }


}
