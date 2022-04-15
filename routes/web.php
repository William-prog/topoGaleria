<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagenesController;
use App\Models\imagenes;

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
    $imagenes = imagenes::orderBy('id', 'asc')->get();
    return view('welcome', compact('imagenes'));
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::resource('imagenes', ImagenesController::class);

    Route::get('/dashboard', function () {
        $imagenes = imagenes::paginate(10);
        return view('dashboard', compact('imagenes'));
        // return view('dashboard');
    })->name('dashboard');
});
