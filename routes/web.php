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



//Livewire samples


// Route::get('dashboard',Dashboard::class)->name('dashboard');


Route::get('/', function () {
    return view('index');
 });
//sample authentication here

Route::get('/',Index::class)->name('index')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'login'])->name('home');
