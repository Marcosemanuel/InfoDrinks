<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bebidas;
use App\Petiscos;
use App\Comentarios;
use App\Tabuleiros;
use App\Musicas;
use App\Jogos;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {   
        $bebidas = Bebidas::get();
        $jogos = Jogos::get();
        $musicas = Musicas::get();
        $comentarios = Comentarios::get();
        $tabuleiros = Tabuleiros::get();
        $petiscos = Petiscos::get();
        $bebidas = Bebidas::get();

        return view('Home.home' , ['bebidas' => $bebidas , 'jogos' => $jogos, 'musicas' => $musicas, 'petiscos' => $petiscos, 'tabuleiros' => $tabuleiros, 'comentarios' => $comentarios ]);
        //return view('Home.home' ,  ['bebidas' => $bebidas, 'petiscos' => Petiscos::all()]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
