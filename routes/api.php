<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list', [ProduitController::class, 'listProduit']);
Route::post('/saveproduit', [ProduitController::class, 'addPdt']);
Route::get('/getonepdt/{code}',[ProduitController::class, 'getOneProduct']);
// Route::put('/updateproduit/{CodePdt}', [ProduitController::class, 'updatePdt']);
