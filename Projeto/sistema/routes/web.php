<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HistoricoController;
use App\Models\Pessoa;
use App\Models\Agendamento;
use App\Models\Sala;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/pessoas', PessoaController::class);
Route::resource('/salas',    SalaController::class);
Route::resource('/agendamentos', AgendamentoController::class);

Route::resource('/reservas', ReservaController::class);
Route::resource('/historicos', HistoricoController::class);


Route::get('/geral', function () {

    $salas = Sala::orderBy('nome')->get();
    $pessoas = Pessoa::orderBy('nome')->get();
    $agendamentos = Agendamento::orderBy('data')->get();

    return view('geral', ['salas' => $salas,'pessoas' => $pessoas, 'agendamentos' => $agendamentos]);
})->name('geral');

Route::get('/administrativo', function () {

    $salas = Sala::orderBy('nome')->get();
    $agendamentos = Agendamento::orderBy('data')->get();
    $pessoas = Pessoa::orderBy('nome')->get();

    $lista = array();
    $equi = Sala::get();
    foreach($equi as $e){

        $query = Agendamento::where('sala_id','=', $e->id)->get();

        if(sizeof($query)>0){
            $lista[$e->nome] = $query;
        } 
    }

    return view('administrativo', ['salas' => $salas, 'agendamentos' => $agendamentos, 'pessoas' => $pessoas, 'listas'=>$lista]);
})->middleware('auth')->name('administrativo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
