<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bebidas;

class BebidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   //Controle de sessão
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {

        $bebidas = Bebidas::get();
         return view('bebidas.bebidas' ,  ['bebidas' => $bebidas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bebidas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tit = $request->get('bebida');
        $desc= $request->get('description');
        $img = $request->get('image');


        $bebida = new Bebidas;
        $bebida->titulo = $tit;
        $bebida->description = $desc;
        $bebida->image = $img;
        $bebida->save();
        return redirect()->to(route('bebidas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $bebida = Bebidas::find($id);

        return view('bebidas.show', ['bebida' => $bebida]);
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
        $bebida = Bebidas::find('id');
        $bebida->delete();
        return redirect()->to(route('bebidas'));
    }
}
