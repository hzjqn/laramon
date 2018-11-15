<?php

namespace App\Http\Controllers;

use App\Pokemon;
use App\Type;
use Illuminate\Http\Request;
use Validator;
use Redirect;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function todos() //Ver la lista de Pokémon
    {
        //
        $allPokemon = Pokemon::all();
        return view('pokemon.index', compact('allPokemon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo()// Agregar un nuevo Pokémon
    {   
        $types = Type::all();
        return view('pokemon.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)// Agregar un nuevo Pokémon
    {
        $types = Type::all();

        // Modificar table segun request
        $rules = [
            'name' => 'required|unique:pokemon|max:255',
            'type_id' => 'required|exists:pokemon,id',
            'height' => 'required|numeric' ,
            'weight' => 'required|numeric' 
        ];

        $valid = Validator::make($request->all(), $rules);

        if($valid->fails()){
            return Redirect::to(route('pokemon.editar',[
                'pokemon'=>$Pokemon->id, 
                'types' => $types]))->withErrors($valid);
        } else {
            $Pokemon = Pokemon::create();
            $Pokemon->name = $request->name;
            $Pokemon->type_id = $request->type_id;
            $Pokemon->height = $request->height;
            $Pokemon->weight = $request->weight;
            $Pokemon->save();
        }

        return view('pokemon.show', ['pokemon'=>$Pokemon]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pokemon  $Pokemon
     * @return \Illuminate\Http\Response
     */
    public function uno(Pokemon $Pokemon) //Ver el detalle de un Pokémon
    {
        return view('pokemon.show', ['pokemon' => $Pokemon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pokemon  $Pokemon
     * @return \Illuminate\Http\Response
     */
    public function editar(Pokemon $Pokemon)// Modificar un Pokémon
    {   
        $types = Type::all();
        return view('pokemon.edit', ['pokemon' => $Pokemon, 'types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pokemon  $Pokemon
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, Pokemon $Pokemon)// Modificar un Pokémon
    {        
        $types = Type::all();

        // Modificar table segun request
        $rules = [
            'name' => 'required|unique:pokemon|max:255',
            'type_id' => 'required|exists:pokemon,id',
            'height' => 'required|numeric' ,
            'weight' => 'required|numeric' 
        ];

        $valid = Validator::make($request->all(), $rules);

        if($valid->fails()){
            return Redirect::to(route('pokemon.editar',[
                'pokemon'=>$Pokemon->id, 
                'types' => $types]))->withErrors($valid);
        } else {
            $Pokemon->name = $request->name;
            $Pokemon->type_id = $request->type_id;
            $Pokemon->height = $request->height;
            $Pokemon->weight = $request->weight;
            $Pokemon->save();
        }

        return view('pokemon.show', ['pokemon'=>$Pokemon]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pokemon  $Pokemon
     * @return \Illuminate\Http\Response
     */
    public function borrar(Pokemon $Pokemon)//Eliminar un Pokémon
    {
        // Borrar row segun request
        Pokemon::destroy($Pokemon->id);
    }
}
