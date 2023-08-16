<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\TypesController;

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
    return view('welcome');
});

Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth'); /* return and display our dashboard*/
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest')->name('login'); /* when the page loads - displays form */
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest'); /* when form is submitted / process form - check email and pass to see if account is valid*/
Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth'); /* logout process*/

Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth'); /* displays form */
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth'); /*  process the form*/
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
