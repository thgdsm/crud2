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
Route::get('/del/{id}',[CrudController::class, 'destroy'])->name('destroy_pessoa');
Route::get('/edit/{id}',[CrudController::class, 'edit'])->name('edit_pessoa');
Route::post('/edit/{id}',[CrudController::class, 'update'])->name('update_pessoa');