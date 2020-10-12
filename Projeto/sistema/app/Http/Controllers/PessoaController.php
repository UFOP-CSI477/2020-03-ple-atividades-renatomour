<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class PessoaController extends Controller
{
    /**
     * Display a listing of the equipamento.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::orderBy('nome')->get();
        return view('pessoas.index', ['pessoas' => $pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){    
            return view('pessoas.create');
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
          //Validar 
          if(!empty($request->all())){
            if(Auth::check()){ 
               Pessoa::create($request->all());
                session()->flash('mensagem', ' cadastrado com sucesso!');
                return redirect()->route('administrativo');
            }else{
                session()->flash('mensagem', 'invalido');
                return redirect()->route('login');
            }
        }else{
            session()->flash('mensagem', 'Preencha os dados corretamente');
            return redirect()->route('pessoas.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        if(Auth::check()){ 
            return view('pessoas.show',['pessoa' =>$pessoa]);
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        if(Auth::check()){ 
            return view('pessoas.edit', ['pessoa' => $pessoa]);
       }else{
           session()->flash('mensagem', 'invalido');
           return redirect()->route('login');
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        if(Auth::check()){ 
            $pessoa->fill($request->all());
            $pessoa->save();

            session()->flash('mensagem', ' atualizado com sucesso!');
            return redirect()->route('pessoas.index');
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        if(Auth::check()){ 
          
                $pessoa->delete();
                session()->flash('mensagem', 'Pessoa excluída com sucesso');
            
            return redirect()->route('pessoas.index');
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }
}
