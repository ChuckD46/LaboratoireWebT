<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ConsultProductController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ModifyProductController;
use resources\views\AddProductView;

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

Route::get('/', ListProductController::class);

Route::get('/Product', ListProductController::class);

Route::get('/Consult/{id}', ConsultProductController::class);

Route::get('/Add', [AddProductController::class, 'show']);

Route::get('/Modify/{id}', [ModifyProductController::class, 'show']);


Route::post('/Add', [AddProductController::class, 'add']);
//Une route qui sera appelée lors du clic sur le bouton « Ajouter », qui servira à traiter la
//demande d’ajout d’un produit. La méthode à utiliser est POST.


Route::post('/Modify/{id}', [ModifyProductController::class, 'modify']);
//Une route qui sera appelée lors du clic sur le bouton « Modifier », qui servira à traiter la
//demande de modification d’un produit. La méthode à utiliser est PUT.



