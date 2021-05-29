<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Services\AddressComponent;
use App\Http\Livewire\Services\WeeklyPackageProcess;
use App\Http\Livewire\Services\WeeklyPackages;
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

Route::get('/', HomeComponent::class);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'auth_login'])->name('login');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'create'])->name('register');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

//Weekly Service
Route::group(['middleware' => ['authuser']], function(){
    Route::get('/services/weekly',WeeklyPackages::class)->name('service.weekly');
    Route::get('/services/weekly/process',WeeklyPackageProcess::class)->name('service.weeklyProcess');
    Route::post('/services/weekly/addAddress', [AddressComponent::class, 'addAddress'])->name('weeklyService.addAddress');
    Route::post('/services/weekly/updateAddress', [AddressComponent::class, 'updateAddress'])->name('weeklyService.updateAddress');
});


