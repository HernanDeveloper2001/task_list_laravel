<?php

use App\Http\Controllers\Task_list_Controller;
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


Route::get('/', [Task_list_Controller::class, '__invoke'])->name('index');

Route::get('/actualizarTarea/{task}', [Task_list_Controller::class, 'editarTarea'])->name('editar.task');

Route::post('/', [Task_list_Controller::class, 'registrarTarea'])->name('index');

Route::get('/', [Task_list_Controller::class, 'mostrarTarea'])->name('index');

Route::delete('/{task}', [Task_list_Controller::class, 'eliminarTarea'])->name('delete.task');

Route::put('/actualizarTarea/{task}', [Task_list_Controller::class, 'actualizarTarea'])->name('actualizar.tarea');
