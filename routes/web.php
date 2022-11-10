<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AccountController;


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

Route::get('/akun', [AkunController::class, 'index' ] );
Route::get('/akun/form', [AkunController::class, 'form' ] );


Route::get('/account', [AccountController::class, 'index' ])
->name('indexAccount');
Route::get('/account/create', [AccountController::class, 'create' ] )
->name('createAccount');
Route::get('/account/show', [AccountController::class, 'show' ] )
->name('showAccount');

Route::get('/', [AccountController::class, 'master' ] );
Route::get('/table', [AccountController::class, 'table' ] )
->name('tableAccount');
Route::get('/data-table', [AccountController::class, 'datatable' ] )
->name('datatableAccount');

