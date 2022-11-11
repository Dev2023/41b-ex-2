<?php

use App\Models\Auteur;
use App\Models\Publication;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    // Auteur::where('active', 1)->where('ddn', '<', now()->subYears(18))->get();
    return Auteur::active()->majeur()->get();
});


// Auteur::find(42)->publications;

Route::get('/publications/{id}', function (Request $request, $id) {
    return Auteur::find($id)->publications;
});

/*
Route::get('/publications/{id}', function (Request $request, Auteur $auteur) {
    return $auteur;
});
*/
