<?php

use App\Http\Controllers\BerandaAdministratorController;
use App\Http\Controllers\BerandaMemberTeamController;
use App\Http\Controllers\BerandaQualityAssuranceController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('administrator')->middleware(['auth', 'auth.administrator'])->group(function () {
    // Route Group for Administrator
    Route::get('dashboard', [BerandaAdministratorController::class, 'index'])->name('administrator.dashboard');
});

Route::prefix('member-team')->middleware(['auth', 'auth.member-team'])->group(function () {
    // Route Group for Member Team
    Route::get('dashboard', [BerandaMemberTeamController::class, 'index'])->name('member-team.dashboard');
});

Route::prefix('quality-assurance')->middleware(['auth', 'auth.quality-assurance'])->group(function () {
    // Route Group for Quality Assurance
    Route::get('dashboard', [BerandaQualityAssuranceController::class, 'index'])->name('quality-assurance.dashboard');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
