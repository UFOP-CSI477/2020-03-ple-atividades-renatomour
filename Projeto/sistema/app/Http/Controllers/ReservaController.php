<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Models\Agendamento;
use App\Models\Pessoa;

use App\Http\Controllers\SalaController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgendamentoController;

use App\Models\User;



use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $salas = Sala::orderBy('nome')->get();
        $agendamentos = Agendamento::orderBy('data', 'asc')->get();
        $lista = array();
        $equi = Sala::get();
        foreach($equi as $e){
    
            $query = Agendamento::where('sala_id','=', $e->id)->get();
    
            if(sizeof($query)>0){
                $lista[$e->nome] = $query;
            } 
        }
    
        return view('reservas.index', ['salas' => $salas, 'agendamentos' => $agendamentos, 'listas' =>$lista]);

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
     * @param  \App\Models\Agendamento  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Agendamento $agendamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $gendamento)
    {
        //
    }
}
