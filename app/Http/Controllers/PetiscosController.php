<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petiscos;

class PetiscosController extends Controller
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
        $petiscos = Petiscos::get();
         return view('petiscos.petiscos' ,  ['petiscos' => $petiscos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
           return view('petiscos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $tit = $request->get('petiscos');
        $desc= $request->get('description');


        $petiscos = new Petiscos;
        $petiscos->titulo = $tit;
        $petiscos->description = $desc;
        $petiscos->image = "que loucura";
        $petiscos->save();
        return redirect()->to(route('petiscos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $petiscos = Petiscos::find($id);

        return view('petiscos.show', ['petiscos' => $petiscos]);
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
        $petiscos = Petiscos::find($petiscos);
        $petiscos->delete();
        return redirect()->to(route('petiscos'));
    }
}
