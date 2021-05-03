<?php
use App\Http\Controllers\CrudController;
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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/', [CrudController::class, 'index'])->name('user.index');
Route::get('/cadastro', [CrudController::class, 'create'])->name('create');
Route::post('/cadastro',[CrudController::class, 'store'])->name('salvar_pessoa');
Route::get('/show',[CrudController::class, 'show'])->name('show_pessoa');