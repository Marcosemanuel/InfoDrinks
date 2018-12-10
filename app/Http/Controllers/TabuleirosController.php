<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabuleiros;
class TabuleirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $tabuleiros = tabuleiros::get();
         return view('tabuleiros.tabuleiros' ,  ['tabuleiros' => $tabuleiros]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabuleiros.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tit = $request->get('titulo');
        $desc= $request->get('description');
        $img = $request->get('image');


        $tabuleiro = new Tabuleiros;
        $tabuleiro->titulo = $tit;
        $tabuleiro->description = $desc;
        $tabuleiro->image = $img;
        $tabuleiro->save();
        return redirect()->to(route('tabuleiros.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tabuleiro = Tabuleiros::find($id);

        return view('tabuleiros.show', ['tabuleiro' => $tabuleiro]);
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
