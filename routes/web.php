<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\ProduitController;
use App\Http\controllers\ClientController;

use App\Models\Produits;
use App\Models\Client;
use App\Models\GestionDesMessages;

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

Route::get('/envoyer', [ClientController::class, 'save1']);





Route::get('/', [ProduitController::class, 'list'])->name('list');
Route::get('/sucessbuy', [ClientController::class, 'list'])->name('list');
Route::get('/show', [ProduitController::class, 'list'])->name('list');
Route::get('/addproduit', [ProduitController::class, 'index']);
Route::get('/save', [ProduitController::class, 'save']);
Route::get('/buy', [ClientController::class, 'list1']);
Route::get('/buy1', [ClientController::class, 'list1'])->name('list1');
Route::get('/saveClient', [ClientController::class, 'buy']);

Route::get('/about', function () {
    return view('About'); });
    Route::get('/contact', function () {
        return view('Cantact'); });  
  //  Route::get('/envoyer', function () {
     //   return "on a recu votre message patienter s'il vous plais notre reponse";});

Route::get('/delete', [ProduitController::class, 'detele']);
