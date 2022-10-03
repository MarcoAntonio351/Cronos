<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\LeadsController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/getLeadsNumber', [LeadsController::class, "getLeadsNumber"]);
Route::get('/getAllLeads', [LeadsController::class, "getAllLeadsByName"]);
Route::get('/getAllOrderByName', [ProductsController::class, "getAllOrderByName"]);
Route::post('/produto/cadastrar', [ProductsController::class, "cadastrar"]);
Route::post('/leads/cadastrar', [LeadsController::class, "cadastrarleads"]);
Route::get('/getAllOutfitters', [OutfittersController::class, "getAllOutfittersByName"]);
Route::post('/outfitters/cadastrar', [OutfittersController::class, "cadastraroutfitter"]);
Route::post('/calendar/cadastrar', [CalendarController::class, "cadastrarevents"]);
Route::delete('/deleteProduct', [ProductsController::class, "delete"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/produtos', function () {
        return Inertia::render('Products');
    })->name('products');
    Route::get('/leads', function () {
        return Inertia::render('Leads');
    })->name('leads');
    Route::get('/fornecedor', function () {
        return Inertia::render('Fornecedor');
    })->name('fornecedor');
    Route::get('/agenda', function () {
        return Inertia::render('Agenda');
    })->name('agenda');
    Route::match(['get', 'post'], '/botman', [BotManController::class,"handle"]);
});