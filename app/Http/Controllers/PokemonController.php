<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;

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
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)// Agregar un nuevo Pokémon
    {

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
        return view('pokemon.create', compact('Pokemon'));
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
        // Modificar table segun request
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
