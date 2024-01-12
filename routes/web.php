<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PtitController;
use App\Http\Controllers\SmaController;
use App\Http\Controllers\SmpController;
use App\Http\Controllers\SdController;
use App\Http\Controllers\GuruController;

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
    return view('user.register',['title' => 'home']);
})->name('home');

Route::get('/login', function () {
    return view('user.login',['title' => 'home']);
})->name('home');

// Route::get('dashboard', function () {
//     return view('dashboard',['title' => 'home']);
// })->name('home');
Route::get('/dashboard', [DashboardController::class, 'totalptit', 'totalguru', 'totalsd', 'totalsmp', 'totalsma'])->name('home');

Route::get('/ptit',function(){
    return view('ptit.index',['title' => 'staf']);
});

Route::get('/sma',function(){
    return view('sma.index',['title' => 'sma']);
});

Route::get('/smp',function(){
    return view('smp.index',['title' => 'PTIT']);
});

Route::get('/sd',function(){
    return view('sd.index',['title' => 'staf']);
});

Route::get('/guru',function(){
    return view('guru.index',['title' => 'PTIT']);
});


Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

//Route::get('/ptit',[PtitController::class,'index']);

//Route::get('/ptit/create',[PtitController::class,'create']);

//Route::post('/ptit/store',[PtitController::class,'store']);

//Route::get('/ptit/{id}/edit',[PtitController::class,'edit']);

//Route::put('/ptit/{id}',[PtitController::class,'update']);

//Route::delete('/ptit/{id}',[PtitController::class,'destroy']);

Route::resource('ptit', PtitController::class);
Route::resource('sma', SmaController::class);
Route::resource('smp', SmpController::class);
Route::resource('sd', SdController::class);
Route::resource('guru', GuruController::class);
// Route::resource('gedung', GedungController::class);