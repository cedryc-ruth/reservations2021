<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ShowController;

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

Route::get('artists', [ArtistController::class,'index'])->name('artist.index');
Route::get('artists/{id}', [ArtistController::class,'show'])
    ->where('id','[0-9]+')
    ->name('artist.show');
Route::get('artists/{id}/edit', [ArtistController::class,'edit'])
    ->where('id','[0-9]+')
    ->name('artist.edit');
Route::put('artists/{id}', [ArtistController::class,'update'])
    ->where('id','[0-9]+')
    ->name('artist.update');

Route::get('types', [TypeController::class,'index'])->name('type.index');
Route::get('types/{id}', [TypeController::class,'show'])
    ->where('id','[0-9]+')
    ->name('type.show');

Route::get('shows', [ShowController::class,'index'])->name('show.index');
Route::get('shows/{id}', [ShowController::class,'show'])
    ->where('id','[0-9]+')
    ->name('show.show');