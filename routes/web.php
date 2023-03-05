<?php
use App\Http\Livewire\Subscribers\Dashboard;
use App\Http\Livewire\Training\Index;
use App\Http\Livewire\Training\Login;
use App\Http\Livewire\Training\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
 });

//Livewire samples


Route::get('dashboard',Dashboard::class)->name('dashboard');



//sample authentication here

 Route::get('index',Index::class)->name('index')->middleware('auth');
Route::get('home',Index::class)->name('home');
Auth::routes();

// Route::get('/index', [App\Http\Controllers\HomeController::class, 'login'])->name('index'); // this code pag mag redirect call ang user sa link
// Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::get('/', [App\Http\Controllers\HomeController::class, 'login']); // to make stay in login form
