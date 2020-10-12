<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Sala;
use App\Models\Pessoa;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = Agendamento::orderBy('nome')->get();
        return view('agendamentos.index', ['agendamento' => $agendamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){ 
            $pessoas = Pessoa::orderBy('nome')->get();
            $salas = Sala::orderBy('name')->get();
            return view('agendamentos.create', ['pessoas' => $pessoas, 'salas' => $salas]);
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request->all())){
            if(Auth::check()){
                Agendamento::create($request->all());
                session()->flash('mensagem', 'Agendamento cadastrado !');
                return redirect()->route('agendamentos.index');
            }else{
                session()->flash('mensagem', 'Invalido');
                return redirect()->route('login');
            }

        }else{
            session()->flash('mensagem', 'Insira os dados corretamente!');
            return redirect()->route('agendamentos.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        if(Auth::check()){
            return view('agendamentos.show',['agendamento' =>$agendamento]);
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        if(Auth::check()){
            $pessoas = Pessoa::get();
            $salas = Sala::get();

            return view('agendamentos.edit', ['pessoas' => $pessoas, 'salas' => $salas, 'agendamento' => $agendamento]);
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        if(auth::check()){
            $agendamento->fill($request->all());
            $agendamento->save();

            session()->flash('mensagem', 'Cadastro atualizado ');
            return redirect()->route('agendamentos.index');
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        if(Auth::check()){    
            $agendamento->delete();
            session()->flash('mensagem', 'Excluído!');
        
            return redirect()->route('agendamentos.index');
        }
        
        else{
            session()->flash('mensagem', 'invalido');
        
            return redirect()->route('login');
        }
    }
}
