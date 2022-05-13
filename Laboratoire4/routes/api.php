<?php

use App\Http\Controllers\ApiController;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//GET
Route::get('/', [ApiController::class, 'apiListProduit'])->middleware('auth.basic');
Route::get('/Produit', [ApiController::class, 'apiListProduit'])->middleware('auth.basic');
Route::get('/Produit/{id}',[ApiController::class, 'apiDetailProduit'])->middleware('auth.basic');

//POST
Route::post('/Produit/Ajout', [ApiController::class, 'apiAddProduct'])->middleware('auth.basic');

//PUT
Route::put('/Produit/{id}', [ApiController::class, 'apiModifierProduit'])->middleware('auth.basic');
Route::put('/Produit/{id}/{Quantite}', [ApiController::class, 'apiQuantiteProduit'])->middleware('auth.basic');

//DELETE
Route::delete('/Produit/{id}', [ApiController::class, 'apiSuppProduit'])->middleware('auth.basic');