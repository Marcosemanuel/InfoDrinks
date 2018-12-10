<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bebidas;
use App\Petiscos;
use App\Comentarios;
use App\Tabuleiros;
use App\Musicas;
use App\Jogos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
         
    public function index()
    {       
        return view('home');

        //return view('home' , ['bebidas' => $bebidas , 'jogos' => $jogos, 'musicas' => $musicas, 'petiscos' => $petiscos, 'tabuleiros' => $tabuleiros, 'comentarios' => $comentarios ]);
    }
}
