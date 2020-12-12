<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Logout;
use App\Http\Controllers\CVform;
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
    return view('profile.Welcomeuser');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	return view('profile.dashboardUser');
   //return view('dashboard');
})->name('dashboard');

Route::get('/logout', [Logout::class, 'logout']);
Route::get('CVform1', [CVform::class, 'form1'])->name('form1');

Route::post('store/form/{id}', [CVform::class, 'insertDefinedInfo']);