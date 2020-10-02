<?php

use Illuminate\Support\Facades\Route;




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

use App\Models\Produto;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EquipamentoController;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/produtos',ProdutoController::class);
Route::resource('/equipamentos',EquipamentoController::class);

/* Route::get('/produtos', function () {
    return Produto::all();
});

Route::get('/produtos/{id}', function ($id) {
  $produto = Produto::findOrFail($id);
    if($produto == null){

        return 'ID INVALIDO';
    }
    return $produto;
}); */