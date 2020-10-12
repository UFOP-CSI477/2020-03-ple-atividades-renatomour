<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::orderBy('nome')->get();
        return view('salas.index', ['salas' => $salas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){    
            return view('salas.create');
        }else{
            session()->flash('mensagem', 'Operação não permitida');
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
               Sala::create($request->all());
                session()->flash('mensagem', ' cadastrado com sucesso!');
                return redirect()->route('administrativo');
            }else{
                session()->flash('mensagem', 'invalido');
                return redirect()->route('login');
            }
        }else{
            session()->flash('mensagem', 'Preencha os dados corretamente!');
            return redirect()->route('salas.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function show(Sala $sala)
    {
        if(Auth::check()){ 
            return view('salas.show',['sala' =>$sala]);
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function edit(Sala $sala)
    {
        if(Auth::check()){ 
            return view('salas.edit', ['sala' => $sala]);
       }else{
           session()->flash('mensagem', 'invalido');
           return redirect()->route('login');
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sala $sala)
    {
        if(Auth::check()){ 
            $sala->fill($request->all());
            $sala->save();

            session()->flash('mensagem', ' atualizado com sucesso!');
            return redirect()->route('salas.index');
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala $sala)
    {
        if(Auth::check()){ 
      
                $sala->delete();
                session()->flash('mensagem', 'Sala excluída Com Sucesso !');
            
            return redirect()->route('salas.index');
        }else{
            session()->flash('mensagem', 'invalido');
            return redirect()->route('login');
        }
    }
}
